@if (!$errors->isEmpty())
    <section class="section alert alert-danger row">
        <div class=" col">
            @foreach ($errors->all() as $error)
                <div>
                    <span class="text-danger"
                        title="This is an error message with hyperlink but you can also do  this  b "
                        class="alert-message">
                        .
                        {{ $error }}
                    </span>
                </div>
            @endforeach


        </div>
        <div class="alert-dismiss col">
           

        </div>
    </section>
@endif
