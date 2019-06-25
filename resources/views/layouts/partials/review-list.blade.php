<div class="review-list container">
    <div class="review-list--heading">
        <h2>Ook uw ervaring delen?</h2>
        <a href="review-form" class="btn-black">Schrijf een review</a>
    </div>
    <div class="row">

        @foreach ($reviews as $review)

            @foreach ($users as $user)
                @if($review->KlantID == $user->id)
                    @php($name = $user->name)
                @endif
            @endforeach

            <div class="col-md-4">
                <div class="single-review">
                    <h2>{{ $review->Titel }}</h2>
                    <p>{{ $review->Text }}</p>
                    <p>{{ $name }}</p>
                </div>
            </div>
        @endforeach

    </div>

    <div class="row">
        {{ $reviews->links() }}
    </div>
</div>