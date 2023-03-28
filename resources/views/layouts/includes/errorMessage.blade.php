@if (!$errors->isEmpty())
    <section class="section alert alert-danger row" style="margin: 0 auto;">
        <div class="col-12">
            @foreach ($errors->all() as $error)
                <div>
                    <span title="This is an error message with hyperlink but you can also do  this  b "
                        class="alert-message">
                        
                        {{ $error }}
                    </span>
                </div>
            @endforeach


        </div>
        
    </section>
@endif
@if (Session::get('error'))
    <section class="section alert alert-danger row" style="margin: 0 auto;">
        <div class="col-12">

            <div>
                <span title="This is an error message with hyperlink but you can also do  this  b "
                    class="alert-message">
                    .
                    {{ Session::get('error') }}
                </span>
            </div>



        </div>
        
    </section>
@endif
