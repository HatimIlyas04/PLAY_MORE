@extends('playmor.header')

@section('content')


<!-- 404 Section Start -->
<section class="section-404 section-lg-space">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="image-404">
                        <img src="../assets/images/inner-page/404.png" class="img-fluid blur-up lazyload" alt="">
                    </div>
                </div>

                <div class="col-12">
                    <div class="contain-404">
                        <h3 class="text-content">
                        La page que vous recherchez n'a pu être trouvée. Le lien vers cette est peut-être obsolète ou nous l'avons peut-être déplacé depuis la dernière fois que vous l'avez mis en signet.
                        </h3>
                        <button id="retourAcceuil" class="btn btn-md text-white theme-bg-color mt-4 mx-auto">Retour à l'écran d'accueil</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 404 Section End -->

    <script>
        document.getElementById('retourAcceuil').addEventListener('click', function(){
            window.location.href = "{{ route('home') }}";
        })
    </script>

@endsection