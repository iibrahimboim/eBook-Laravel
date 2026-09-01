    @extends('layout.app')

    @section('content')
        {{-- tampilan buku awal --}}
        <div class="container py-4">
            <div id="carousel-sample" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carousel-sample" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#carousel-sample" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#carousel-sample" data-bs-slide-to="2"></button>
                    <button type="button" data-bs-target="#carousel-sample" data-bs-slide-to="3"></button>
                    <button type="button" data-bs-target="#carousel-sample" data-bs-slide-to="4"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" alt=""
                            src="https://img.magnific.com/free-vector/hand-drawn-literature-twitter-header_23-2149721049.jpg?semt=ais_hybrid&w=740&q=80" />
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" alt=""
                            src="https://img.magnific.com/free-vector/hand-drawn-literature-twitter-header_23-2149721049.jpg?semt=ais_hybrid&w=740&q=80" />
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" alt=""
                            src="https://img.magnific.com/free-vector/hand-drawn-literature-twitter-header_23-2149721049.jpg?semt=ais_hybrid&w=740&q=80" />
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" alt=""
                            src="https://img.magnific.com/free-vector/hand-drawn-literature-twitter-header_23-2149721049.jpg?semt=ais_hybrid&w=740&q=80" />
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" alt=""
                            src="https://img.magnific.com/free-vector/hand-drawn-literature-twitter-header_23-2149721049.jpg?semt=ais_hybrid&w=740&q=80" />
                    </div>
                </div>
                <a class="carousel-control-prev" data-bs-target="#carousel-sample" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" data-bs-target="#carousel-sample" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>

            {{-- Paket Langganan --}}
            <div class="mt-4">
                <div class="d-flex align-items-center gap-2">
                    <span class="badge bg-yellow text-yellow-fg p-2"><i class="fa-solid fa-crown fs-3"></i></span>
                    <h2 class="m-3 text-dark">Paket Langganan</h2>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100" style="background: linear-gradient(135deg, #ffffff 0%, #74da9e 100%)">
                        <div class="card-body d-flex flex-column justify-content-center align-items-center text-dark row">
                            <div class="col-4"></div>
                            <div class="col-6 text-center text-dark">
                                <h2 style="font-weight: bold">NON-FICTION</h2>
                                <p class="text-secondary" style="font-weight: bold; margin: 0 !important">PACKAGE</p>
                                <div>
                                    Rp <span style="font-size: 2rem; font-weight: bold" class="text-warning">49.000</span>
                                    <br>
                                    <span style=" font-weight: bold margin: 0 !important" class="text-secondary">/30
                                        Days</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100" style="background: linear-gradient(135deg, #ffffff 0%, #71c0d8 100%)">
                        <div class="card-body d-flex flex-column justify-content-center align-items-center text-dark row">
                            <div class="col-4"></div>
                            <div class="col-6 text-center text-dark">
                                <h2 style="font-weight: bold">FICTION</h2>
                                <p class="text-secondary" style="font-weight: bold; margin: 0 !important">PACKAGE</p>
                                <div>
                                    Rp <span style="font-size: 2rem; font-weight: bold" class="text-warning">79.000</span>
                                    <br>
                                    <span style=" font-weight: bold margin: 0 !important" class="text-secondary">/30
                                        Days</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100" style="background: linear-gradient(135deg, #ffffff 0%, #0b55f3 100%)">
                        <div class="card-body d-flex flex-column justify-content-center align-items-center text-dark row">
                            <div class="col-4"></div>
                            <div class="col-6 text-center text-dark">
                                <h2 style="font-weight: bold">NON-FICTION</h2>
                                <p class="text-secondary" style="font-weight: bold; margin: 0 !important">PACKAGE</p>
                                <div>
                                    Rp <span style="font-size: 2rem; font-weight: bold" class="text-warning">49.000</span>
                                    <br>
                                    <span style=" font-weight: bold margin: 0 !important" class="text-secondary">/30
                                        Days</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-4">
                        </div>
                    </div>
                </div>

                {{-- buku baru dirilis --}}
                <div class="mt-4">
                    <div class="d-flex align-items-center gap-2">
                        <span class="badge bg-yellow text-yellow-fg p-2"><i class="fa-solid fa-crown fs-3"></i></span>
                        <h2 class="mt-3 text-dark">Buku Baru Di Rilis</h2>
                    </div>
                    <div id="wrapper-slider">
                        <div class="px-2">
                            <div class="card" style="padding: 0.75rem; border-radius: 16px;">
                                <div class="card-body">
                                    <img class="d-block mx-auto w-40 h-50" alt=""
                                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRngt_wcp4rXC8lKJuYHapKHODKGj8oIVTJPqI5qGSNKw&s=10" />
                                </div>
                                <div class="d-flex gap-2 mt-2">
                                    <p class="bagde"><i class="fa-solid fa-mobile"></i>PDP</p>
                                    <p class="bagde">1</p>
                                </div>
                                <div>
                                    <h5><span style="font-size: 0.8rem;" class="text-secondary"> Ibrahim </span>
                                        <br><span style="font-size: 1rem;">Dru and Tale of the five kingdoms</span>
                                    </h5>
                                    <h4 syle="font-size: 1.2rem; font-weight: bold">Rp. 45.000 </h4>
                                </div>
                            </div>
                        </div>

                        <div class="px-2">
                            <div class="card" style="padding: 0.75rem; border-radius: 16px;">
                                <div class="card-body">
                                    <img class="d-block mx-auto w-40 h-50" alt=""
                                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRo59vGd3i31UlLm80z5Wz4n-2pWOGa0tcPL9kLq4bRTnGwkXrux2_VAn8Z&s=10" />
                                </div>
                                <div class="d-flex gap-2 mt-2">
                                    <p class="bagde"><i class="fa-solid fa-mobile"></i>PDP</p>
                                    <p class="bagde">2</p>
                                </div>
                                <div>
                                    <h5><span style="font-size: 0.8rem;" class="text-secondary"> Ibrahim </span>
                                        <br><span style="font-size: 1rem;">laut Bercerita</span>
                                    </h5>
                                    <h4 syle="font-size: 1.2rem; font-weight: bold">Rp. 110.000 </h4>
                                </div>
                            </div>
                        </div>

                        <div class="px-2">
                            <div class="card" style="padding: 0.75rem; border-radius: 16px;">
                                <div class="card-body">
                                    <img class="d-block mx-auto w-40 h-50" alt=""
                                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRngt_wcp4rXC8lKJuYHapKHODKGj8oIVTJPqI5qGSNKw&s=10" />
                                </div>
                                <div class="d-flex gap-2 mt-2">
                                    <p class="bagde"><i class="fa-solid fa-mobile"></i>PDP</p>
                                    <p class="bagde">3</p>
                                </div>
                                <div>
                                    <h5><span style="font-size: 0.8rem;" class="text-secondary"> Ibrahim </span>
                                        <br><span style="font-size: 1rem;">Card With Tittle</span>
                                    </h5>
                                    <h4 syle="font-size: 1.2rem; font-weight: bold">Rp. 45.000 </h4>
                                </div>
                            </div>
                        </div>

                        <div class="px-2">
                            <div class="card" style="padding: 0.75rem; border-radius: 16px;">
                                <div class="card-body">
                                    <img class="d-block mx-auto w-40 h-50" alt=""
                                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRngt_wcp4rXC8lKJuYHapKHODKGj8oIVTJPqI5qGSNKw&s=10" />
                                </div>
                                <div class="d-flex gap-2 mt-2">
                                    <p class="bagde"><i class="fa-solid fa-mobile"></i>PDP</p>
                                    <p class="bagde">4</p>
                                </div>
                                <div>
                                    <h5><span style="font-size: 0.8rem;" class="text-secondary"> Ibrahim </span>
                                        <br><span style="font-size: 1rem;">Card With Tittle</span>
                                    </h5>
                                    <h4 syle="font-size: 1.2rem; font-weight: bold">Rp. 45.000 </h4>
                                </div>
                            </div>
                        </div>

                        <div class="px-2">
                            <div class="card" style="padding: 0.75rem; border-radius: 16px;">
                                <div class="card-body">
                                    <img class="d-block mx-auto w-40 h-50" alt=""
                                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRngt_wcp4rXC8lKJuYHapKHODKGj8oIVTJPqI5qGSNKw&s=10" />
                                </div>
                                <div class="d-flex gap-2 mt-2">
                                    <p class="bagde"><i class="fa-solid fa-mobile"></i>PDP</p>
                                    <p class="bagde">5</p>
                                </div>
                                <div>
                                    <h5><span style="font-size: 0.8rem;" class="text-secondary"> Ibrahim </span>
                                        <br><span style="font-size: 1rem;">Card With Tittle</span>
                                    </h5>
                                    <h4 syle="font-size: 1.2rem; font-weight: bold">Rp. 45.000 </h4>
                                </div>
                            </div>
                        </div>

                        <div class="px-2">
                            <div class="card" style="padding: 0.75rem; border-radius: 16px;">
                                <div class="card-body">
                                    <img class="d-block mx-auto w-40 h-50" alt=""
                                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRngt_wcp4rXC8lKJuYHapKHODKGj8oIVTJPqI5qGSNKw&s=10" />
                                </div>
                                <div class="d-flex gap-2 mt-2">
                                    <p class="bagde"><i class="fa-solid fa-mobile"></i>PDP</p>
                                    <p class="bagde">6</p>
                                </div>
                                <div>
                                    <h5><span style="font-size: 0.8rem;" class="text-secondary"> Ibrahim </span>
                                        <br><span style="font-size: 1rem;">Card With Tittle</span>
                                    </h5>
                                    <h4 syle="font-size: 1.2rem; font-weight: bold">Rp. 45.000 </h4>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            {{-- buku gratis --}}
            <div class="mt-4">
                <div class="d-flex align-items-center gap-2 mb-4">
                    <h2 class="mt-3 text-dark" style="font-weight: bold">Buku Gratis</h2>
                </div>

                <div class="row">
                    <div class="col-4">
                        <div class="card d-flex flex-column">
                            <div class="row row-0 flex-fill">
                                <div class="col-md-3">
                                    <a href="#">
                                        <img src="https://image.gramedia.net/rs:fit:0:0/f:webp/plain/https://cdn.gramedia.com/uploads/items/9786024246945_Laut-Bercerita.png" class="w-100 h-100 object-cover" alt="Card side image" />
                                    </a>
                                </div>
                                <div class="col">
                                    <div class="card-body h-full d-flex flex-column">
                                        <h3 class="card-title">
                                            <div class="badge"><i class="fa-solid fa-mobile"></i>PDF</div>
                                        </h3>
                                        <div class="text-secondary">
                                            Penulis
                                            <br><span class="text-dark">Judul Buku</span>
                                        </div>
                                        <div class="d-flex align-items-center pt-4 mt-auto">
                                            <h3>
                                                <span class="text-decoration-line-through text-secondary">Rp 50.000</span>
                                                <span class="text-dark">Rp 0</span>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="card d-flex flex-column">
                            <div class="row row-0 flex-fill">
                                <div class="col-md-3">
                                    <a href="#">
                                        <img src="https://image.gramedia.net/rs:fit:0:0/f:webp/plain/https://cdn.gramedia.com/uploads/items/9786024246945_Laut-Bercerita.png" class="w-100 h-100 object-cover" alt="Card side image" />
                                    </a>
                                </div>
                                <div class="col">
                                    <div class="card-body h-full d-flex flex-column">
                                        <h3 class="card-title">
                                            <div class="badge"><i class="fa-solid fa-mobile"></i>PDF</div>
                                        </h3>
                                        <div class="text-secondary">
                                            Penulis
                                            <br><span class="text-dark">Judul Buku</span>
                                        </div>
                                        <div class="d-flex align-items-center pt-4 mt-auto">
                                            <h3>
                                                <span class="text-decoration-line-through text-secondary">Rp 50.000</span>
                                                <span class="text-dark">Rp 0</span>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="card d-flex flex-column">
                            <div class="row row-0 flex-fill">
                                <div class="col-md-3">
                                    <a href="#">
                                        <img src="https://image.gramedia.net/rs:fit:0:0/f:webp/plain/https://cdn.gramedia.com/uploads/items/9786024246945_Laut-Bercerita.png" class="w-100 h-100 object-cover" alt="Card side image" />
                                    </a>
                                </div>
                                <div class="col">
                                    <div class="card-body h-full d-flex flex-column">
                                        <h3 class="card-title">
                                            <div class="badge"><i class="fa-solid fa-mobile"></i>PDF</div>
                                        </h3>
                                        <div class="text-secondary">
                                            Penulis
                                            <br><span class="text-dark">Judul Buku</span>
                                        </div>
                                        <div class="d-flex align-items-center pt-4 mt-auto">
                                            <h3>
                                                <span class="text-decoration-line-through text-secondary">Rp 50.000</span>
                                                <span class="text-dark">Rp 0</span>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="card d-flex flex-column">
                            <div class="row row-0 flex-fill">
                                <div class="col-md-3">
                                    <a href="#">
                                        <img src="https://image.gramedia.net/rs:fit:0:0/f:webp/plain/https://cdn.gramedia.com/uploads/items/9786024246945_Laut-Bercerita.png" class="w-100 h-100 object-cover" alt="Card side image" />
                                    </a>
                                </div>
                                <div class="col">
                                    <div class="card-body h-full d-flex flex-column">
                                        <h3 class="card-title">
                                            <div class="badge"><i class="fa-solid fa-mobile"></i>PDF</div>
                                        </h3>
                                        <div class="text-secondary">
                                            Penulis
                                            <br><span class="text-dark">Judul Buku</span>
                                        </div>
                                        <div class="d-flex align-items-center pt-4 mt-auto">
                                            <h3>
                                                <span class="text-decoration-line-through text-secondary">Rp 50.000</span>
                                                <span class="text-dark">Rp 0</span>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="card d-flex flex-column">
                            <div class="row row-0 flex-fill">
                                <div class="col-md-3">
                                    <a href="#">
                                        <img src="https://image.gramedia.net/rs:fit:0:0/f:webp/plain/https://cdn.gramedia.com/uploads/items/9786024246945_Laut-Bercerita.png" class="w-100 h-100 object-cover" alt="Card side image" />
                                    </a>
                                </div>
                                <div class="col">
                                    <div class="card-body h-full d-flex flex-column">
                                        <h3 class="card-title">
                                            <div class="badge"><i class="fa-solid fa-mobile"></i>PDF</div>
                                        </h3>
                                        <div class="text-secondary">
                                            Penulis
                                            <br><span class="text-dark">Judul Buku</span>
                                        </div>
                                        <div class="d-flex align-items-center pt-4 mt-auto">
                                            <h3>
                                                <span class="text-decoration-line-through text-secondary">Rp 50.000</span>
                                                <span class="text-dark">Rp 0</span>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="card d-flex flex-column">
                            <div class="row row-0 flex-fill">
                                <div class="col-md-3">
                                    <a href="#">
                                        <img src="https://image.gramedia.net/rs:fit:0:0/f:webp/plain/https://cdn.gramedia.com/uploads/items/9786024246945_Laut-Bercerita.png" class="w-100 h-100 object-cover" alt="Card side image" />
                                    </a>
                                </div>
                                <div class="col">
                                    <div class="card-body h-full d-flex flex-column">
                                        <h3 class="card-title">
                                            <div class="badge"><i class="fa-solid fa-mobile"></i>PDF</div>
                                        </h3>
                                        <div class="text-secondary">
                                            Penulis
                                            <br><span class="text-dark">Judul Buku</span>
                                        </div>
                                        <div class="d-flex align-items-center pt-4 mt-auto">
                                            <h3>
                                                <span class="text-decoration-line-through text-secondary">Rp 50.000</span>
                                                <span class="text-dark">Rp 0</span>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    @endsection

    @push('scripts')
        <script>
            $(document).ready(function() {
                $('#wrapper-slider').slick({
                    dots: true,
                    infinite: false,
                    speed: 300,
                    slidesToShow: 4,
                    slidesToScroll: 4,
                    responsive: [{
                            breakpoint: 1024,
                            settings: {
                                slidesToShow: 3,
                                slidesToScroll: 3,
                                infinite: true,
                                dots: true
                            }
                        },
                        {
                            breakpoint: 600,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 2
                            }
                        },
                        {
                            breakpoint: 480,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1
                            }
                        }
                        // You can unslick at a given breakpoint now by adding:
                        // settings: "unslick"
                        // instead of a settings object
                    ]
                });
            })
        </script>
    @endpush
    @push('style')
        <style>
            .slick-prev::before,
            .slick-prev::before {
                color: #333;
            }


        </style>
    @endpush
