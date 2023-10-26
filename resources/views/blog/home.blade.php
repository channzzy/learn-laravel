@extends('layouts.app',['title' => 'Home'])
@section('content')
    <section id="header">
        <div class="container-fluid p-4" style="background-color: #F99417; font-family: 'Kanit', sans-serif;">
            <h1>Craft UI assets for designers to focus on creating</h1>
            <div class="header-component d-flex align-items-center gap-2">
                <div class="left bg-white px-5 py-3 rounded-pill border border-dark d-flex justify-content-center align-items-center">
                    <h4 class="me-5" style="font-family: 'Kanit', sans-serif;">freebies</h4>
                    <div class="px-4 py-3 rounded-circle position-absolute" style="margin-left: 10rem; background-color: #713ABE;">
                        <h4 style="font-family: 'Kanit', sans-serif;">4</h4>
                    </div>
                </div>
                <div class="left bg-white px-5 py-3 rounded-pill border border-dark d-flex justify-content-center align-items-center">
                    <h4 class="me-5" style="font-family: 'Kanit', sans-serif;">premium</h4>
                    <div class="bg-success px-4 py-3 rounded-circle position-absolute" style="margin-left: 10.5rem">
                        <h4 style="font-family: 'Kanit', sans-serif;">4</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-4">
                    <div class="element-1 px-5 py-3">
                        <h3 class="pe-2" style="background-color: #F99417; font-size: 5rem; position: absolute;font-family: 'Bebas Neue', sans-serif;">UI</h3>
                        <div style="background-color: #362FD9; position: absolute;margin-top: 5.5rem; transform: rotate(5deg);">
                            <h3 style=" font-family: 'Bebas Neue', sans-serif; transform: rotate(-5deg); font-size: 5rem;">CHARTS</h3>
                        </div>
                        <div class="pe-4" style="background-color: #A7D397; position: absolute;margin-top: 11.5rem; transform: rotate(-6deg);">
                            <h3 style=" font-family: 'Bebas Neue', sans-serif; transform: rotate(6deg); font-size: 6rem;">PACK</h3>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="element-2 px-5 py-3">
                        <div class="d-flex justify-content-end">
                            <div class="border border-dark">
                                <p style="font-family: 'Bebas Neue', sans-serif; font-size: 2rem;">BEST SELLER </p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                                <p style="font-family: 'Kanit', sans-serif; text-align: end">Ready-to-user pack of 20 <br>charts supplied with guides <br> on how to user them properly </p>
                        </div>
                        <div class="price d-flex justify-content-end">
                                <h3 style="font-family: 'Kanit', sans-serif;">
                                $19
                                </h3>
                        </div>
                        <div class="img">
                            
                        </div>
                        <div class="element-3">
                            
                        </div>
                    </div>
                </div>
                <div class="col-5" style=" background-color: #A7D397; height: 400px;">
                    <div class="element-1 ps-5 py-3">
                        <h3 class="pe-2 border border-dark" style="background-color: white; font-size: 5rem; position: absolute;font-family: 'Bebas Neue', sans-serif;">RAD</h3>
                        <div style="background-color: white; position: absolute;margin-top: 5.5rem; transform: rotate(-12deg);" class="border border-dark">
                            <h3 style=" font-family: 'Bebas Neue', sans-serif; transform: rotate(12deg); font-size: 5rem;">EMAIL</h3>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="pe-4 border border-dark" style="background-color: white; position: absolute;margin-top: 12.5rem; transform: rotate(5deg);">
                                <h4 style=" font-family: 'Bebas Neue', sans-serif; transform: rotate(-5deg); font-size: 4rem;">TEMPLATES</h4>
                            </div>
                            <p style="margin-top: 14rem; margin-left: 20rem; font-family: 'Kanit', sans-serif; text-align: end;">We designed 12 email <br> templates in 3 style so <br> you don't have so</p>
                        </div>
                        <div class="price d-flex justify-content-end">
                            <h3 style="font-family: 'Kanit', sans-serif;">
                            $19
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection