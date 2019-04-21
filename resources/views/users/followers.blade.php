@extends("layouts.app")

@section("content")
    <div class="row">
        <aside class="col-sm-4">
            @include("users.card", ["user" => $user])
        </aside>
        <div class="col-sm-8">
            <div class="mt-2">
                @include("users.navtabs", ["user" => $user])
            </div>
            @include("users.users", ["users" => $users])
        </div>
    </div>
@endsection