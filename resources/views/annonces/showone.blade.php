
            {{-- @if($annonce->versions == 'Française') --}}
                <div class="row row-cols-1 row-cols-md-2 g-4" style="margin-top: 6px;">
                    @foreach ($connexes as $connexe)
                    <div class="col-sm">
                        <div class="single-blog mb-30 wow fadeInUp" data-wow-delay=".2s">
                            <div class="blog-content">

                                <h4>
                                    <a href="{{ route('annonces.show',$connexe->slug) }}">{{ $connexe->titre }}</a>
                                </h4>
                                <div class="primaryColor">
                                    <span class="date font-weight-bold">{{ $connexe->created_at->format('d/m/y') }} à
                                            {{ $connexe->created_at->format('H:i') }}</span>*
                                    <span class="category font-weight-bold">{{ $connexe->categorie->nom }}</span>
                                </div>
                                <a class="read-more" href="{{ route('annonces.show',$connexe->slug) }}">Lire plus <i class="lni lni-arrow-right"></i></a>
                                <div class="hero-line bg-secondaryColor my-4"></div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
           