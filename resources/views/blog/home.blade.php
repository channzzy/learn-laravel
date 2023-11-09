<x-app-layout title="Home Page">
    <div class="container-fluid p-3">
        <h1>Tutorial Laravel By Parsinta</h1>
        <div class="row">
            @for ($i = 0; $i <= 10; $i++)
            <div class="col-md-4">
                <div class="card m-2">
                    <div class="card-body">
                        <p>test</p>
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </div>
</x-app-layout>
