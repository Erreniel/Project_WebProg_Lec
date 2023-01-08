@extends('navbar')
@section('title', 'Edit')
@section('content')
<style>
    div.card{
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
</style>

<body>
    <div class="card mx-auto my-3 p-5 col-md-4" style="background-color: #ffffff;">
        <h3 class="mx-auto mb-5" style="color: #2892B3">Job Requirement Edit</h3>
        <form method="POST" action="{{route('editRequirement', $job->id)}}">
            @csrf
            <div class="mb-5">
                <label for="edit" class="form-label">Job Requirement</label>
                <textarea class="form-control" name="requirementEdit" id="requirementEdit" placeholder="Enter Job Requirment" rows="6">{{$job->requirement}}</textarea>
            </div>

            <div class="mb-3 d-grid col-5 mx-auto">
                {{-- <input class="btn btn-primary w-100" type="submit" value="Edit" style="background-color: #2892B3"> --}}
                <button type="submit" class="btn btn-primary" style="background-color: #2892B3">Edit</button>
            </div>
        </form>
    </div>
@endsection
