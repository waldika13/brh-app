@extends('dashboard.layout.main')

@section('container')
<link href="{{ asset('css/dashboard/list-item.css') }}" rel="stylesheet">
<div class="header">
    <div>
        <h2>Reviews</h2>
    </div>
</div>

@if($reviews->count())
<div class="container-fluid content pb-5" id="content">
    @foreach($reviews as $review)
    <div class="card-list row justify-content-between mx-0 p-3">
        <div class="col-sm-11">
            <span>Review Body :</span>
            <h4 class="mb-3">
                {{ $review ->body }}
            </h4>
            <a href="/detail_page/{{ $review->hotel->slug }}" class="text-black text-decoration-none pe-5">Hotel : {{ $review->hotel->title }}</a>
            <span class="pe-5">Reviewer : {{ $review->user->name }}</span>
            <span class="pe-5">Date : {{ substr($review->created_at,0,10) }}</span>
        </div>
        <div class="col-sm-1">
            <button class="btn btn-warning btn-dropdown">⋮</button>
        </div>
        <div class="list-dropdown">
            <form action="/dashboard/reviews/{{ $review->id }}" method="POST" id="deleteForm">
                @csrf
                @method('delete')
                    <button class="btn" type="submit"><i class="bi bi-dash-circle"></i> Delete</button>
            </form>
        </div>
    </div>
    @endforeach
    <div class="d-flex justify-content-center mt-4">
        {{ $reviews->links() }}
    </div>
</div>
@else
    <p class="text-center fs-4 mt-5">Review Not Found</p>
@endif

<script type="text/javascript">
try {
    const btnDelete = document.querySelectorAll('#deleteForm');
    btnDelete.forEach((button, index) => {
        button.addEventListener('submit', function (e) {
            var form = this;
            e.preventDefault(); // <--- prevent form from submitting
            swal({
                title: "Are you sure?",
                text: "You will not be able to recover this review!",
                icon: "warning",
                buttons: [
                    'No, cancel it!',
                    'Yes, I am sure!'
                ],
                dangerMode: true,
            }).then(function (isConfirm) {
                if (isConfirm) {
                    swal({
                        title: 'Success!',
                        text: 'Review are successfully deleted!',
                        icon: 'success'
                    }).then(function () {
                        form.submit();
                    });
                } else {
                    swal("Cancelled", "Review is safe :)", "error");
                }
            })
        });
    });
} catch (error) {
    
}
</script>
@endsection