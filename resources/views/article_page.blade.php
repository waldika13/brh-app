@extends('layout.main')

@section('container')

<img src="https://picsum.photos/1200/400" class="img-fluid my-3">
<div class="container col-xxl-8 py-4">
    <div class="row justify-content-center g-5">
        <div class="col-lg-12">
            <h1 class="display-5 fw-bold lh-1 mb-3">Berbagi kisah mu kepada orang lain yuk!</h1>
            <p class="lead text-justify">Quickly design and customize responsive mobile-first sites with
                Bootstrap, the
                world's most popular front-end open source toolkit, featuring Sass variables and mixins,
                responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <button type="button" class="btn btn-primary btn-lg px-4 me-md-2" data-toggle="modal"
                    data-target="#articleModal">Create Post</button>
            </div>
            <div class="modal fade" id="articleModal" tabindex="-1" role="dialog"
                        aria-labelledby="articleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="articleModalLabel">Create Post</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">Name:</label>
                                            <input type="text" class="form-control" id="recipient-name">
                                        </div>
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">Title:</label>
                                            <input type="text" class="form-control" id="recipient-name">
                                        </div>
                                        <div class="form-group">
                                            <label for="message-text" class="col-form-label">Description:</label>
                                            <textarea class="form-control" id="message-text"></textarea>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Send message</button>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
    </div>
</div>
<div class="container">
    <h2 class="text-center mb-3">Article</h2>
    <p class="border-bottom border-dark"></p>
    <div class="row my-5 mx-4">
        <div class="col-md-6 px-4">
            <div
                class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-primary">World</strong>
                    <h3 class="mb-2">Featured post</h3>
                    <p class="card-text mb-auto text-justify">Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Eveniet modi, quod architecto fuga dolorem placeat hic. Nulla consectetur iusto
                        atque, ratione amet maxime architecto aliquid velit? Dicta mollitia maiores rerum..</p>
                    <div class="mt-2 text-muted text-right font-italic">Ahmad Faidhoni</div>
                </div>
            </div>
        </div>
        <div class="col-md-6 px-4">
            <div
                class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-primary">World</strong>
                    <h3 class="mb-2">Featured post</h3>
                    <p class="card-text mb-auto text-justify">Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Eveniet modi, quod architecto fuga dolorem placeat hic. Nulla consectetur iusto
                        atque, ratione amet maxime architecto aliquid velit? Dicta mollitia maiores rerum..</p>
                    <div class="mt-2 text-muted text-right font-italic">Ahmad Faidhoni</div>
                </div>
            </div>
        </div>
        <div class="col-md-6 px-4">
            <div
                class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-primary">World</strong>
                    <h3 class="mb-2">Featured post</h3>
                    <p class="card-text mb-auto text-justify">Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Eveniet modi, quod architecto fuga dolorem placeat hic. Nulla consectetur iusto
                        atque, ratione amet maxime architecto aliquid velit? Dicta mollitia maiores rerum..</p>
                    <div class="mt-2 text-muted text-right font-italic">Ahmad Faidhoni</div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection