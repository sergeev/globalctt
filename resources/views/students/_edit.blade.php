@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Student {{ $student->name_1_ot }}</div>

                <div class="card-body">
                    <form action="{{ route('students.students.update', $student) }}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label for="organization" class="col-md-3 col-form-label text-md-right">Organization</label>

                            <div class="col-md-5">
                                <input id="organization" type="text" class="form-control @error('organization') is-invalid @enderror" name="organization" value="{{ $student->organization }}">

                                @error('organization')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputsCertificate" class="col-md-3 col-form-label text-md-right">InputsCertificate</label>

                            <div class="col-md-5">
                                <input id="inputsCertificate" type="text" class="form-control @error('inputsCertificate') is-invalid @enderror" name="inputsCertificate" value="{{ $student->inputsCertificate }}">

                                @error('inputsCertificate')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name_1_ot" class="col-md-3 col-form-label text-md-right">name_1_ot</label>

                            <div class="col-md-5">
                                <input id="name_1_ot" type="text" class="form-control @error('name_1_ot') is-invalid @enderror" name="name_1_ot" value="{{ $student->name_1_ot }}">

                                @error('name_1_ot')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="name_1_ot" class="col-md-3 col-form-label text-md-right">surname_1_fam</label>

                            <div class="col-md-5">
                                <input id="surname_1_fam" type="text" class="form-control @error('surname_1_fam') is-invalid @enderror" name="surname_1_fam" value="{{ $student->surname_1_fam }}">

                                @error('surname_1_fam')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="inputEmail" class="col-md-3 col-form-label text-md-right">inputEmail</label>

                            <div class="col-md-5">
                                <input id="inputEmail" type="email" class="form-control @error('surname_1_fam') is-invalid @enderror" name="inputEmail" value="{{ $student->inputEmail }}">

                                @error('inputEmail')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="childDateInput" class="col-md-3 col-form-label text-md-right">inputEmail</label>

                            <div class="col-md-5">
                                <input id="childDateInput" type="date" class="form-control @error('childDateInput') is-invalid @enderror" name="childDateInput" value="{{ $student->childDateInput }}">

                                @error('inputEmail')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        {{ method_field('PUT') }}
                        <div class="form-group row">
                            <label for="gender" class="col-md-3 col-form-label text-md-right">gender</label>
                            <div class="input-group col-md-5">
                              <select class="custom-select" id="gender" class="form-control @error('gender') is-invalid @enderror" name="gender" value="{{ $student->gender }}">
                                <!-- @foreach($genders as $gender)
                                <!-- <option value="{{ $student->gender == NULL}}">gender</option> -->
                                <option value="{{ $student->gender == 0 }}">Male</option>
                                <option value="{{ $student->gender == 0 }}">Famale</option>
                                @endforeach -->
                                {{ Form::select('gender', ['0' => 'Девочка', '1' => 'Мальчик'], null, ['class' => 'form-control']) }}
                                
                                @error('gender')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                            <label for="inputsSchool" class="col-md-3 col-form-label text-md-right">inputsSchool</label>

                            <div class="col-md-5">
                                <input id="inputsSchool" type="text" class="form-control @error('inputsSchool') is-invalid @enderror" name="inputsSchool" value="{{ $student->inputsSchool }}">

                                @error('inputsSchool')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="inputsClass" class="col-md-3 col-form-label text-md-right">inputsClass</label>

                            <div class="col-md-5">
                                <input id="inputsClass" type="text" class="form-control @error('inputsClass') is-invalid @enderror" name="inputsClass" value="{{ $student->inputsClass }}">

                                @error('inputsClass')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="inputsKvantum" class="col-md-3 col-form-label text-md-right">inputsKvantum</label>

                            <div class="col-md-5">
                                <input id="inputsKvantum" type="text" class="form-control @error('inputsKvantum') is-invalid @enderror" name="inputsKvantum" value="{{ $student->inputsKvantum }}">

                                @error('inputsKvantum')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="teacherName" class="col-md-3 col-form-label text-md-right">teacherName</label>

                            <div class="col-md-5">
                                <input id="teacherName" type="text" class="form-control @error('teacherName') is-invalid @enderror" name="teacherName" value="{{ $student->teacherName }}">

                                @error('teacherName')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="groupTime" class="col-md-3 col-form-label text-md-right">groupTime</label>

                            <div class="col-md-5">
                                <input id="groupTime" type="text" class="form-control @error('groupTime') is-invalid @enderror" name="groupTime" value="{{ $student->groupTime }}">

                                @error('groupTime')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputsNameLegalRepresentative" class="col-md-3 col-form-label text-md-right">inputsNameLegalRepresentative</label>

                            <div class="col-md-5">
                                <input id="inputsNameLegalRepresentative" type="text" class="form-control @error('inputsNameLegalRepresentative') is-invalid @enderror" name="inputsNameLegalRepresentative" value="{{ $student->inputsNameLegalRepresentative }}">

                                @error('inputsNameLegalRepresentative')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="NameLegalRepresentativeTelephone" class="col-md-3 col-form-label text-md-right">NameLegalRepresentativeTelephone</label>

                            <div class="col-md-5">
                                <input id="NameLegalRepresentativeTelephone" type="text" class="form-control @error('NameLegalRepresentativeTelephone') is-invalid @enderror" name="NameLegalRepresentativeTelephone" value="{{ $student->NameLegalRepresentativeTelephone }}">

                                @error('NameLegalRepresentativeTelephone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="NameLegalRepresentativeTelephone" class="col-md-3 col-form-label text-md-right">NameLegalRepresentativeTelephone</label>

                            <div class="col-md-5">
                                <input id="NameLegalRepresentativeTelephone" type="text" class="form-control @error('NameLegalRepresentativeTelephone') is-invalid @enderror" name="NameLegalRepresentativeTelephone" value="{{ $student->NameLegalRepresentativeTelephone }}">

                                @error('NameLegalRepresentativeTelephone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputsComments" class="col-md-3 col-form-label text-md-right">inputsComments</label>

                            <div class="col-md-5">
                            <textarea rows="10" cols="100" name="inputsComments" class="form-control @error('inputsComments') is-invalid @enderror" id="inputsComments">{{ $student->inputsComments }}</textarea>
                                
                            @error('inputsComments')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="student_rang" class="col-md-3 col-form-label text-md-right">student_rang</label>

                            <div class="col-md-5">
                                <input id="student_rang" type="text" class="form-control @error('student_rang') is-invalid @enderror" name="student_rang" value="{{ $student->student_rang }}">

                                @error('student_rang')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="student_exp" class="col-md-3 col-form-label text-md-right">student_exp</label>

                            <div class="col-md-5">
                                <input id="student_exp" type="text" class="form-control @error('student_exp') is-invalid @enderror" name="student_exp" value="{{ $student->student_exp }}">

                                @error('student_exp')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="student_coin" class="col-md-3 col-form-label text-md-right">student_coin</label>

                            <div class="col-md-5">
                                <input id="student_coin" type="text" class="form-control @error('student_coin') is-invalid @enderror" name="student_coin" value="{{ $student->student_coin }}">

                                @error('student_coin')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="student_checked" class="col-md-3 col-form-label text-md-right">student_checked</label>

                            <div class="col-md-5">
                                <input id="student_checked" type="text" class="form-control @error('student_checked') is-invalid @enderror" name="student_checked" value="{{ $student->student_checked }}">

                                @error('student_checked')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="student_deleted" class="col-md-3 col-form-label text-md-right">student_deleted</label>

                            <div class="col-md-5">
                                <input id="student_deleted" type="text" class="form-control @error('student_deleted') is-invalid @enderror" name="student_deleted" value="{{ $student->student_deleted }}">

                                @error('student_deleted')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                    <button type="submit" class="btn btn-primary">
                        Update
                    </button>

                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection
