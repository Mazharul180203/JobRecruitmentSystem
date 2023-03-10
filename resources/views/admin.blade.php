@extends('layout')
@if (Route::has('login'))
    @auth
        @if (\Illuminate\Support\Facades\Auth::user()['email']=='mazhar1803@cseku.ac.bd')
            <section id="team" class="team">
                <div class="container">

                    <div class="section-title">
                        <br>
                        <h2>Only For Admin</h2>

                    </div>
                    <!DOCTYPE html>
                    <html>
                    <head>
                        <style>

                            input[type=text] {
                                width: 100%;
                                height: 25px;
                                padding: 25px 10px;
                                margin: 12px 0;
                                box-sizing: border-box;
                                border: #dab4ff;
                                /*background-color:  #dab4ff;*/
                                color: black;
                            }

                            label {
                                color: #331b4b;
                            }
                        </style>
                    </head>
                    <body>

                    <form action="contact" method="post" class="pb-5">
                        <div style="color: #331b4b" class="form-group">
{{--                            <label for="name"><i><strong>Tropic :</strong></i></label>--}}
{{--                            <input type="text" name="take" class="form-control; border border-info">--}}

                            <label for="take"><i><strong>Catagory :</strong></i></label>
                            <select style="background-color:powderblue" name="take" id="take" class="form-control">
                                <option style="background-color: whitesmoke" value="">Select Catagoty</option>
                                <option  style="background-color: whitesmoke" value="Interview Tips">Interview Tips</option>
                                <option  style="background-color: whitesmoke" value="Accounting/Finance">Accounting/Finance</option>
                                <option style="background-color: whitesmoke" value="Bank/ Non-Bank Fin. Institution"> Bank/ Non-Bank Fin. Institution</option>
                                <option style="background-color: whitesmoke" value="Commercial/Supply Chain"> Commercial/Supply Chain</option>
                                <option style="background-color: whitesmoke" value="Education/Training">Education/Training</option>
                                <option  style="background-color: whitesmoke" value=" Engineer/Architects"> Engineer/Architects</option>
                                <option style="background-color: whitesmoke" value="Garments/Textile"> Garments/Textile</option>
                                <option style="background-color: whitesmoke" value="HR/Org. Development"> HR/Org. Development</option>

                                <option style="background-color: whitesmoke" value="Design/Creative"> Design/Creative</option>
                                <option style="background-color: whitesmoke" value="Production/Operation">  Production/Operation</option>
                                <option style="background-color: whitesmoke" value="Hospitality/ Travel/ Tourism"> Hospitality/ Travel/ Tourism</option>
                                <option style="background-color: whitesmoke" value="Beauty Care/ Health & Fitness"> Beauty Care/ Health & Fitness</option>
                                <option style="background-color: whitesmoke" value="Electrician/ Construction/ Repair">Electrician/ Construction/ Repair</option>
                                <option style="background-color: whitesmoke" value=" IT & Telecommunication">  IT & Telecommunication</option>
                                <option style="background-color: whitesmoke" value="Marketing/Sales"> Marketing/Sales </option>
                                <option style="background-color: whitesmoke" value="Customer Support/Call Centre">Customer Support/Call Centre</option>
                                <option style="background-color: whitesmoke" value="Media/Ad./Event Mgt.">Media/Ad./Event Mgt.</option>
                                <option style="background-color: whitesmoke" value="Medical/Pharma"> Medical/Pharma</option>
                                <option style="background-color: whitesmoke" value=" Agro (Plant/Animal/Fisheries)">  Agro (Plant/Animal/Fisheries)</option>
                                <option style="background-color: whitesmoke" value="NGO/Development">NGO/Developmen</option>
                                <option style="background-color: whitesmoke" value="Networking"> Network Engineering</option>
                                <option style="background-color: whitesmoke" value="Research/Consultancy"> Research/Consultancy</option>
                                <option style="background-color: whitesmoke" value=" Secretary/Receptionist">  Secretary/Receptionist</option>
                                <option style="background-color: whitesmoke" value="Driving/Motor Technician"> Driving/Motor Technician</option>
                                <option style="background-color: whitesmoke" value="Security/Support Service"> Security/Support Service</option>

                            </select>
                            <div>{{$errors->first('take')}}</div>
                        </div>

                        <div style="color: #331b4b" class="form-group">
                            <label for="name"><i><strong>Blog :</strong></i></label>
{{--                            <input type="text" name="name" class="form-control; border border-info">--}}
                            <textarea class="form-control" name="name"  placeholder="name"></textarea>
                            <div>{{$errors->first('name')}}</div>
                        </div>


                        <button type="submit" class="btn btn-primary"> Submit</button>

                        @csrf
                    </form>
                    <br><br>
                    <div class="card" style="width: 100%">

                        <div class="card-header" style="text-align: center">
                            <h3>
                                Available Recruiters
                            </h3>
                        </div>

                    </div>
                        @foreach($rec as $rec)
                            @foreach($user as $usr)
                                @if($usr->email!='mazhar1803@cseku.ac.bd')


                                    @if($usr->id == $rec->rec_id)


                                        <div class="container-fluid" style="margin: auto;width: 50%; padding: 10px">
                                            <div class="card border-secondary text-center"
                                                 style="background-color: rgba(251,239,251,0.56);">
                                                <div class="row mb-4">
                                                    <div class="col" style="padding: 15px">
                                                        <h5 class="card-title">{{$rec->name}}</h5>
                                                        <p class="card-text"><i
                                                                class="far fa-envelope-open"></i> {{$rec->email}}</p>
                                                        <p class="card-text"><i
                                                                class="fa fa-university"></i> {{$rec->company}}</p>

                                                        <p class="card-text"><i
                                                                class="fas fa-map-marker-alt"></i> {{$rec->address}}</p>
                                                        <p class="card-text">Contact No: {{$rec->contact_no}}</p>

                                                        @if($usr->select==1)
                                                            <strong><p style="color: green"> {{'Recruiter is selected'}}</p></strong>
                                                        @endif

                                                    </div>
                                                    <hr class="my-4">
                                                    <div class="col" style="padding: 15px">
                                                        <p class="card-text">
                                                            <!DOCTYPE html>
                                                            <html>
                                                            <head>
                                                                <style>
                                                                    .button {
                                                                        display: inline-block;
                                                                        padding: 15px 25px;
                                                                        font-size: 24px;
                                                                        cursor: pointer;
                                                                        text-align: center;
                                                                        text-decoration: none;
                                                                        outline: none;
                                                                        color: #fff;
                                                                        background-color: #4CAF50;
                                                                        border: none;
                                                                        border-radius: 15px;
                                                                        box-shadow: 0 9px #999;
                                                                    }

                                                                    .button:hover {
                                                                        background-color: #3e8e41
                                                                    }

                                                                    .button:active {
                                                                        background-color: #3e8e41;
                                                                        box-shadow: 0 5px #666;
                                                                        transform: translateY(4px);
                                                                    }
                                                                </style>
                                                            </head>
                                                            <body>


                                                            <form action="admin1/{{$usr->id}}" method="post"
                                                                  enctype="multipart/form-data">
                                                                @csrf
                                                                @method('PATCH')
                                                                <div>
                                                                    <input type="hidden" id="select" name="select"
                                                                           value="1">
                                                        <p><input class="button"
                                                                  style="text-align:center;background-color: #1e0033 ;color: wheat; padding: 9px 20px;margin: 17px;font-size: 20px;"
                                                                  type="submit" value="Select"></p>
                                                    </div>

                                                    </form>


                    </body>

                    </html>
                    </p>
                </div>

                </div>
                </div>
                </div>


                <div>
                    {{--                                            <ul class="list-group list-group-flush">--}}
                    {{--                                                <li class="list-group-item">--}}
                    {{--                                                {{$rec->name}}--}}
                    {{--                                            <li>{{$rec->email}}</li>--}}
                    {{--                                                <!DOCTYPE html>--}}
                    {{--                                                <html>--}}
                    {{--                                                <head>--}}
                    {{--                                                    <style>--}}
                    {{--                                                        .button {--}}
                    {{--                                                            display: inline-block;--}}
                    {{--                                                            padding: 15px 25px;--}}
                    {{--                                                            font-size: 24px;--}}
                    {{--                                                            cursor: pointer;--}}
                    {{--                                                            text-align: center;--}}
                    {{--                                                            text-decoration: none;--}}
                    {{--                                                            outline: none;--}}
                    {{--                                                            color: #fff;--}}
                    {{--                                                            background-color: #4CAF50;--}}
                    {{--                                                            border: none;--}}
                    {{--                                                            border-radius: 15px;--}}
                    {{--                                                            box-shadow: 0 9px #999;--}}
                    {{--                                                        }--}}

                    {{--                                                        .button:hover {background-color: #3e8e41}--}}

                    {{--                                                        .button:active {--}}
                    {{--                                                            background-color: #3e8e41;--}}
                    {{--                                                            box-shadow: 0 5px #666;--}}
                    {{--                                                            transform: translateY(4px);--}}
                    {{--                                                        }--}}
                    {{--                                                    </style>--}}
                    {{--                                                </head>--}}
                    {{--                                                <body>--}}


                    {{--                                                <form action="admin1/{{$usr->id}}" method="post"--}}
                    {{--                                                      enctype="multipart/form-data">--}}
                    {{--                                                    @csrf--}}
                    {{--                                                    @method('PATCH')--}}
                    {{--                                                    <div>--}}
                    {{--                                                        <input type="hidden" id="select" name="select"--}}
                    {{--                                                               value="1">--}}
                    {{--                                                        <p><input class="button" style="text-align:center;background-color: #1e0033 ;color: wheat; padding: 9px 20px;margin: 17px;font-size: 20px;" type="submit" value="Select"></p>--}}
                    {{--                                                    </div>--}}

                    {{--                                                </form>--}}

                    {{--                                                </body>--}}

                    {{--                                                </html>--}}
                    {{--                                                </li>--}}

                    {{--                                            </ul>--}}
                    {{--                                                <div class="col-2">--}}
                    {{--                                                    <a href="admin1/{{$usr->id}}" class="btn btn-danger">DELETE Recruiter</a>--}}
                    {{--                                                </div>--}}


                    @endif

                </div>

                @endif

                @endforeach

                @endforeach

                </div>

                @else
                    <div class="container " style="text-align: center; margin-top: fill">
                        <div>

                            <p style="font-size: 20px; color: #331b4b ;text-align: justify-all">{{ "Not Admin" }}</a></p>
                        </div>
                    </div>

                @endif

                @endif
                @endif
            </section>
