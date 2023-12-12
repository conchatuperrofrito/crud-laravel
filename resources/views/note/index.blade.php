@extends('layouts.app')
@section('content')
    <a href="{{ route('note.create') }}">create new note</a>
    <ul>
        {{-- //POR CADA NOTA ESTAREMOS PINTANDO UN LI --}}
        @forelse ($notes as $note)
            <li>
                <a href="{{ route('note.show', $note->id) }}">{{ $note->title }}</a> |

                {{-- kk --}}

                <a href="{{ route('note.edit', $note->id) }}">EDIT</a> |

                {{-- kk --}}

                <form method="POST" action="{{ route('note.destroy', $note->id) }}">
                    @csrf
                    @method('delete')
                    DELETE
                    <input type="submit" value="DELETE">
                </form>
            </li>
        @empty
            <p>NO data.</p>
        @endforelse
    </ul>
@endsection
