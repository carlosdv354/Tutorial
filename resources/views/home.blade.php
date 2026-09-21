@extends('layouts.app')
@section('content')
    <div class=" max-w-7xl mx-auto px-4">

        <h1>Bienvenido a mi tutorial</h1>
        {{-- vercion vieja de TW (3.1.2) --}}
        <x-alert2 type="warning" class="mb-4">
            <x-slot name="title">
                Tuto
            </x-slot>
            <x-slot name="content">
                Oli :3
            </x-slot>
        </x-alert2>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.   
        </p>
    </div>
