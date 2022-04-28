@extends('layouts/main')

@section('container')

<div class="row">
    <div class="col text-center mt-3 d-flex justify-content-center" >
        <div class="col-md-4">
            <div class="card mb-3 rounded-3 shadow-sm"">
              <div class="card-header py-3 bg-danger">
                <h4 class="my-0 fw-normal dark" style="color: white">Landing Pages</h4>
              </div>
              <div class="card-body">
                <a href="https://apps.apple.com/us/app/online-florist-floweradvisor">
                    <img class="mb-1" src="images/logo.png" alt="" height="30">
                </a>
                <ul class="list-unstyled mt-3 mb-4">
                  <li>Lorem ipsum dolor sit amet.</li>
                  <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. A, officiis?</li>
                  <li>Button Copy untuk mengcopy Tulisan HALLOW10</li>
                  <li>Lorem ipsum dolor sit amet.</li>
                </ul>
                <div class="button d-flex ml-3">
                    {{-- <button type="button" class="w-100 btn btn-lg btn-outline-danger">Copy</button>
                    <button type="button" class="w-100 btn btn-lg btn-outline-danger" style="margin-left: 5px">View</button> --}}


                    <style>
                            .form-copy {
                                height: 60px;
                                margin: 0px;
                                width: 100%;
                                padding: 0 14px;
                                border: solid 1px #bfbfbf;
                                background: #f9f9f9;
                                border-radius: 5px;
                            }
                        
                            button.btn-copy{
                                color: #fff;
                                background-color: #ea0972;
                                border-color: #7c091e;
                                border-top: solid 2px #b80f44;
                                border-left: solid 2px #db0d3d;
                                border-right: solid 2px #e5218a;
                                border-bottom: solid 2px #f9066b;
                            }
                            button.btn-copy:hover{
                                background-color: #a3131a;
                            }
                            input#code:focus {
                                outline: none!important;
                            }
                            .btn-circle {
                                border-radius: 50%;
                                position: relative;
                                top: -29px;
                                float: right;
                                border-color: #790a3c;
                            }
                    </style>

                    <input class="form-copy" id="text-copy" value="HOLLOW10">
                    <button class="btn btn-copy bg-danger" onclick="copyText()">
                        <span class="fa fa-copy"></span> COPY
                    </button> 
                </div>
              </div>
            </div>
        </div>
    </div>
</div>

<script>
    function copyText() {  
    var copyText = document.getElementById("text-copy");  
    copyText.select();  
    document.execCommand("copy");
}
</script>

@endsection