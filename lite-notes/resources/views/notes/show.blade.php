<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Notes') }}
        </h2>
    </x-slot>

    <div class="py-12">
		<div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-col gap-6">
			<div class="flex">
				<p class="opacity-70 text-slate-100">
					<strong>Created At: {{$note->created_at ? $note->created_at->diffForHumans() : ''}}</strong>
				</p>
				<p class="opacity-70 text-slate-100 ml-8">
					<strong>Updated At: {{$note->updated_at ? $note->updated_at->diffForHumans() : ''}}</strong>
				</p>
				<a href="{{route('notes.edit', $note)}}" class="text-slate-100 ml-auto">Edit Note</a>
				<form action="{{route('notes.destroy', $note)}}" method="post">
					@method('delete')
					@csrf
					<button type="submit" class="text-slate-200 ml-auto">Delete</button>
				</form>
			</div>
			<div class="bg-gray-50 text-gray-800 px-6 rounded-md">

				<h1 class="font-bold text-4xl">{{$note->title}}</h1>

				<p>{{$note->text}}</p>
			</div>
        </div>
    </div>
</x-app-layout>
