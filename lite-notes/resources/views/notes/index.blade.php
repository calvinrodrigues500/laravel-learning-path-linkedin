<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Notes') }}
        </h2>
    </x-slot>

    <div class="py-12">
		<div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-col gap-6">
			<a href="{{route('notes.create')}}" class="rounded-md text-white font-bold">+ New Note</a>
           @foreach ($notes as $note)
				<div class="bg-gray-50 text-gray-800 px-6 rounded-md">
					<h2 class="font-bold">{{$note->title}}</h2>
					<p>{{$note->text}}</p>
					<span>{{$note->updated_at ? $note->created_at->diffForHumans() : $note->updated_at}}</span>
				</div>
		   @endforeach
		   {{$notes->links()}}
        </div>
    </div>
</x-app-layout>
