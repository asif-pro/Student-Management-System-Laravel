@extends('layout.ParentMain')

@section('parentcontent')
@section('title')
Marksheet
@endsection


<div class="row" id="">
    <div class="col-12">
        <div class="card">
            <div class="card-body teacher_content">
                <h2>Grade</h2>
            
                <table id="basic-datatable" class="table table-striped dt-responsive nowrap" width="100%">
                    <thead>
                        <tr style="background-color: #313a46; color: #ababab;">
                            <th>Subject</th>
                            <th>Attendance</th>
                            <th>Mid</th>
                            <th>Final</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for($i=0; $i != count($grade); $i++) 
                        <tr>
                            <td width="20%">{{$grade[$i]->subjectname}}</td>
                            <td width="20%">{{$grade[$i]->attendance}}</td>
                            <td width="20%">{{$grade[$i]->midmarks}}</td>
                            <td width="20%">{{$grade[$i]->finalmarks}}</td>
                        </tr>
                        @endfor
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<a href="{{route('parentstudentmark.pdf')}}" class="btn btn btn-secondary">Marksheet</a>
<a href="{{route('parentstudentgrade.pdf')}}" class="btn btn btn-secondary">Grade</a>
</div>
</div>
</div>
</div>
@endsection