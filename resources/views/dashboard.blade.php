@extends('layouts.admin')

@section('content')
<main>
    <section class="section-2 container-fluid p-0">
            <div class="cover">
                <div class="content text-center">
                    <h1>Block to Block Booking !!</h1>
                    <p>
                        All the system operated by Division of Student Welfare.
                    </p>
                </div>
            </div>
            <div>
            <!-- <div class="card text-center">
  <div class="card-header">
  Computer Science Engineering
  </div>
  <div class="card-body">
    <h5 class="card-title"></h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
  <div class="card-footer text-muted">
  See all books
  </div>
</div> -->
            </div>
            <div class="container-fluid text-center">
                <div class="numbers d-flex flex-md-row flex-wrap justify-content-center" style="margin-top: 5vmin; margin-bottom: 5vmin;">
                   <a href="{{ url('/demoindex') }}" style="text-decoration: none; color: black;"> <div class="rect">
                        <h1>1</h1>
                        <p>(Block)</p>
                    </div></a>
                    <a href="" style="text-decoration: none; color: black;"><div class="rect">
                        <h1>2</h1>
                        <p>(Block)</p>
                    </div></a>
                    <a href="" style="text-decoration: none; color: black;"><div class="rect">
                        <h1>3</h1>
                        <p>(Block)</p>
                    </div></a>
                    <a href="" style="text-decoration: none; color: black;"><div class="rect">
                        <h1>4</h1>
                        <p>(Block)</p>
                    </div></a>
                    <a href="" style="text-decoration: none; color: black;"><div class="rect">
                        <h1>5</h1>
                        <p>(Block)</p>
                    </div></a>
                    <a href="" style="text-decoration: none; color: black;"><div class="rect">
                        <h1>6</h1>
                        <p>(Block)</p>
                    </div></a>
                    <a href="" style="text-decoration: none; color: black;"><div class="rect">
                        <h1>7</h1>
                        <p>(Block)</p>
                    </div></a>
                   <a href="" style="text-decoration: none; color: black;"> <div class="rect">
                        <h1>8</h1>
                        <p>(Block)</p>
                    </div></a>
                    <a href="" style="text-decoration: none; color: black;"><div class="rect">
                        <h1>9</h1>
                        <p>(Block)</p>
                    </div></a>
                   <a href="" style="text-decoration: none; color: black;"> <div class="rect">
                        <h1>10</h1>
                        <p>(Block)</p>
                    </div></a>
                    <a href="" style="text-decoration: none; color: black;"><div class="rect">
                        <h1>11</h1>
                        <p>(Block)</p>
                    </div></a>
                   <a href="" style="text-decoration: none; color: black;"> <div class="rect">
                        <h1>12</h1>
                        <p>(Block)</p>
                    </div></a>
                    <a href="" style="text-decoration: none; color: black;"><div class="rect">
                        <h1>13</h1>
                        <p>(Block)</p>
                    </div></a>
                    <a href="" style="text-decoration: none; color: black;"><div class="rect">
                        <h1>14</h1>
                        <p>(Block)</p>
                    </div></a>
                    <a href="" style="text-decoration: none; color: black;"><div class="rect">
                        <h1>15</h1>
                        <p>(Block)</p>
                    </div></a>
                    <a href="" style="text-decoration: none; color: black;"><div class="rect">
                        <h1>16</h1>
                        <p>(Block)</p>
                    </div></a>
                </div>
            </div>

     </section>
</main>   
<footer>

<div class="container-fluid p-0">
    <div class="row text-left">
        <div class="col-md-5 col-md-5">
            <h1 class="text-light">About Us</h1>
            <p class="text-muted">India's Largest University* Lovely Professional University, Jalandhar-Delhi,
                     G.T. Road, Phagwara, Punjab (INDIA) -144411.
            </p>
            <p class="pt-4 text-muted">
               Website:
                        <span> http://www.lpu.in</span>
            </p>
        </div>
        <div class="col-md-5">
            <h4 class="text-light">Newsletter</h4>
            <p class="text-muted">Stay Update</p>
            <form class="form-inline">
                <div class="col pt-">
                    <div class="input-group pr-5">
                        <input type="text" class="form-control bg-dark text-white" placeholder="Email">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-2 col-sm-12">

            <h4 class="text-light">Follow Us</h4>
            <p class="text-muted">Lets us be social</p>
            <div class="column">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-youtube"></i>
            </div>
        </div>
    </div>
</div>
</footer>

   
@endsection