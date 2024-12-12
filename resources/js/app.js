import "./bootstrap";
import "flowbite";
import {
    Livewire,
    Alpine,
} from "../../vendor/livewire/livewire/dist/livewire.esm";
import imageViewer from "./imageViewer";

window.Alpine = Alpine;
Alpine.data("imageViewer", imageViewer);

Livewire.start();
