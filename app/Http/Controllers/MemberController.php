<?php

namespace App\Http\Controllers;

use App\Models\Family;
use App\Models\Member;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\MemberStoreRequest;
use App\Http\Requests\MemberUpdateRequest;
use Illuminate\Validation\ValidationException;

class MemberController extends Controller
{
    public function index(): View
    {
        $members = Member::with('family')
            ->filter(request(['family_id', 's']))
            ->orderBy(request('sort_by', 'updated_at'), request('sort_type', 'desc'))
            ->paginate()
            ->withQueryString();

        return view('members.index', compact('members'));
    }

    public function create(): View
    {
        $families = Family::select('id as value', 'name as text')->latest()->get()->toArray();
        $clothingSizes = array_map(fn($size) => ['value' => $size, 'text' => $size], Member::CLOTHING_SIZES);

        return view('members.create', compact('families', 'clothingSizes'));
    }

    public function store(MemberStoreRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        if (!is_null($validated['existing_family_id'])) {
            $validated['family_id'] = $validated['existing_family_id'];
        } else if (!is_null($validated['new_family_name'])) {
            $family = Family::firstOrCreate(['name' => $validated['new_family_name']]);
            $validated['family_id'] = $family->id;
        }

        if (isset($validated['picture'])) {
            $validated['picture'] = $request->file('picture')->store('uploads/members', 'public');
        }

        Member::create($validated);

        $request->session()->flash('flash', [
            'toast-message' => [
                'type' => 'success',
                'message' => trans('The member has been added successfully.')
            ]
        ]);

        return redirect(route('members.index', absolute: false));
    }

    public function show(Member $member)
    {

        $families = Family::select('id as value', 'name as text')->latest()->get()->toArray();
        $clothingSizes = array_map(fn($size) => ['value' => $size, 'text' => $size], Member::CLOTHING_SIZES);
        $member->name = ($member->first_name ?? '') . ' ' . ($member->last_name ?? '');

        return view('members.show', compact('member', 'families', 'clothingSizes'));
    }

    public function edit(Member $member)
    {
        $families = Family::select('id as value', 'name as text')->latest()->get()->toArray();
        $clothingSizes = array_map(fn($size) => ['value' => $size, 'text' => $size], Member::CLOTHING_SIZES);
        $member->name = ($member->first_name ?? '') . ' ' . ($member->last_name ?? '');

        return view('members.edit', compact('member', 'families', 'clothingSizes'));
    }

    public function update(MemberUpdateRequest $request, Member $member)
    {
        $validated = $request->validated();

        if (!is_null($validated['existing_family_id'])) {
            $validated['family_id'] = $validated['existing_family_id'];
        } else if (!is_null($validated['new_family_name'])) {
            $family = Family::firstOrCreate(['name' => $validated['new_family_name']]);
            $validated['family_id'] = $family->id;
        }

        if (isset($validated['picture'])) {
            $validated['picture'] = $request->file('picture')->store('uploads/members', 'public');
            if (!is_null($member->picture) && Storage::disk('public')->exists($member->picture)) {
                Storage::disk('public')->delete($member->picture);
            }
        }

        $member->update($validated);

        $request->session()->flash('flash', [
            'toast-message' => [
                'type' => 'success',
                'message' => trans('The member has been updated successfully.')
            ]
        ]);

        return redirect(route('members.index', absolute: false));
    }

    public function destroy(Request $request, Member $member)
    {
        if (!is_null($member->picture) && Storage::disk('public')->exists($member->picture)) {
            Storage::disk('public')->delete($member->picture);
        }
        $member->delete();

        $request->session()->flash('flash', [
            'toast-message' => [
                'type' => 'success',
                'message' => trans('The member has been deleted successfully.')
            ]
        ]);

        return back();
    }
}


