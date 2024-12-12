<?php

namespace App\Http\Controllers;

use App\Http\Requests\FamilyStoreRequest;
use App\Http\Requests\FamilyUpdateRequest;
use App\Models\Family;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Http\Request;

class FamilyController extends Controller
{
    public function index(): View
    {
        $families = Family::filter(request(['s']))
            ->orderBy(request('sort_by', 'updated_at'), request('sort_type', 'desc'))
            ->paginate()
            ->withQueryString();

        return view('families.index', compact('families'));
    }

    public function create(): View
    {
        return view('families.create');
    }

    public function store(FamilyStoreRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        Family::create($validated);

        $request->session()->flash('flash', [
            'toast-message' => [
                'type' => 'success',
                'message' => trans('The family has been added successfully.')
            ]
        ]);

        return redirect(route('families.index', absolute: false));
    }

    public function edit(Family $family)
    {
        return view('families.edit', compact('family'));
    }

    public function update(FamilyUpdateRequest $request, Family $family)
    {
        $validated = $request->validated();

        $family->update($validated);

        $request->session()->flash('flash', [
            'toast-message' => [
                'type' => 'success',
                'message' => trans('The family has been updated successfully.')
            ]
        ]);

        return redirect(route('families.index', absolute: false));
    }

    public function destroy(Request $request, Family $family)
    {
        $family->delete();

        $request->session()->flash('flash', [
            'toast-message' => [
                'type' => 'success',
                'message' => trans('The family has been deleted successfully.')
            ]
        ]);

        return back();
    }
}


