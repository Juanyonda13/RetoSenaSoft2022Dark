<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Play</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
     <section class="col-12 d-flex flex-column flex-wrap">

             <div class="w-100 d-flex p-2 ">

                     <div class="w-100 border p-4 d-flex flex-row shadow-lg rounded-4 justify-content-between bg-success">
                          <div class="w-25 d-flex justify-content-center">
                              <section class="w-25 d-flex flex-column align-items-center text-break justify-content-center">
                                   <i class="bi bi-person-circle d-flex w-25  justify-content-center text-white fs-1"></i>
                                   <p class="d-flex text-white">{{$player_card[0][0]}}</p>
                              </section>
                              <section class="" style="width:15%">
                                <section class="w-100 border d-flex justify-content-center rounded-2 shadow-lg bg-white">
                                    <p class="fs-3">8</p>
                                </section>
                              </section>
                          </div>
                          <div class="w-25 d-flex justify-content-center">
                            <section class="w-25 d-flex flex-column align-items-center text-break justify-content-center">
                                <i class="bi bi-person-circle d-flex w-25  justify-content-center text-white fs-1"></i>
                                <p class="d-flex text-white">{{$player_card[1][0]}}</p>
                           </section>
                           <section class="" style="width:15%">
                             <section class="w-100 border d-flex justify-content-center rounded-2 shadow-lg bg-white">
                                 <p class="fs-3">8</p>
                             </section>
                           </section>
                          </div>
                          <div class="w-25 d-flex justify-content-center">
                            <section class="w-25 d-flex flex-column align-items-center text-break justify-content-center">
                                <i class="bi bi-person-circle d-flex w-25 fs-1 justify-content-center text-white"></i>
                                <p class="d-flex text-white">{{$player_card[2][0]}}</p>
                           </section>
                           <section class="" style="width:15%">
                             <section class="w-100 border d-flex justify-content-center rounded-2 shadow-lg bg-white">
                                 <p class="fs-3">8</p>
                             </section>
                           </section>
                          </div>
                          <div class="w-25 d-flex justify-content-center">
                            <section class="w-25 d-flex flex-column align-items-center text-break justify-content-center">
                                <i class="bi bi-person-circle d-flex w-25 fs-1 justify-content-center text-white"></i>
                                <p class="d-flex text-white">{{$player_card[3][0]}}</p>
                           </section>
                           <section class="" style="width:15%">
                             <section class="w-100 border d-flex justify-content-center rounded-2 shadow-lg bg-white">
                                 <p class="fs-3">8</p>
                             </section>
                           </section>
                          </div>
                     </div>
             </div>


             <section class="w-100 d-flex h-auto p-5 justify-content-center gap-5 flex-wrap flex-row "  >
               {{-- @foreach($cartas as $c) --}}
              
               <div class="w-100 d-flex ">
                <p></p>
            </div>
            <div id="zonasDeSoltar" class="col-12 d-flex justify-content-center flex-row">
                <div class="zona-de-soltar" style="width: 200px;" value=""></div>
               <div class="zona-de-soltar col"  value="">a</div>
               <div class="zona-de-soltar col"  value="">a</div>
               <div class="zona-de-soltar col"  value="">a</div>
               <div class="zona-de-soltar col"  value="">a</div>
               </div>

               <div class="card p-2 shadow-lg" style="width: 20rem;" draggable="true">
                <h5 class="card-title">Carta de {{$player_card[0][0]}}</h5>
                <p>{{$player_card[0][1][0]->carta}}</p>
                <img src="{{$player_card[0][1][0]->img_carta}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$player_card[0][1][0]->modelo}}</h5>
                  <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="" style="font-size:8pt ">
                    <option selected>Seleccione la opcion a comparar</option>
                    <option value="1" class="">
                    <div class="w-100 d-flex justify-content-between flex-wrap flex-row">
                        <p>Cilingraje:</p>
                        <p>{{$player_card[0][1][0]->cilindraje}} cc</p>
                    </div>
                    </option>
                    <option value="2">
                        <div class="w-100 d-flex justify-content-between flex-wrap flex-row">
                            <p>cilindros :</p>
                            <p>{{$player_card[0][1][0]->cilindros}} cc</p>
                        </div>
                    </option>
                    <option value="3">
                        <div class="w-100 d-flex justify-content-between flex-wrap flex-row">
                            <p>Potencias:</p>
                            <p>{{$player_card[0][1][0]->potencia}}cc</p>
                        </div>
                    </option>

                    <option value="3">
                        <div class="w-100 d-flex justify-content-between flex-wrap flex-row">
                            <p>revoluciones:</p>
                            <p>{{$player_card[0][1][0]->revoluciones}}cc</p>
                        </div>
                    </option>

                    <option value="3">
                        <div class="w-100 d-flex justify-content-between flex-wrap flex-row">
                            <p>peso:</p>
                            <p>{{$player_card[0][1][0]->peso}}cc</p>
                        </div>
                    </option>


                </select>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
                        <article draggable="true" class="col-2 w-25 border p-2 border-5 rounded-4 shadow-lg h-100" >
                          
                            <p class="d-flex text-dark">Carta de {{$player_card[0][0]}}</p>
                            
                            <div class="w-100 d-flex ">
                                <p>{{$player_card[0][1][0]->carta}}</p>
                            </div>
                            <div class="w-100 d-flex h-50">
                                <img src="{{$player_card[0][1][0]->img_carta}}" alt="" class="img-fluid rounded-4">
                            </div>
                            <div class="w-100 d-flex mt-3">
                                <p>{{$player_card[0][1][0]->modelo}}</p>
                            </div>
                            <div class="w-100 d-flex  bg-black-50 p-2 flex-column ">
                                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="" style="font-size:8pt ">
                                    <option selected>Seleccione la opcion a comparar</option>
                                    <option value="1" class="">
                                    <div class="w-100 d-flex justify-content-between flex-wrap flex-row">
                                        <p>Cilingraje:</p>
                                        <p>{{$player_card[0][1][0]->cilindraje}} cc</p>
                                    </div>
                                    </option>
                                    <option value="2">
                                        <div class="w-100 d-flex justify-content-between flex-wrap flex-row">
                                            <p>cilindros :</p>
                                            <p>{{$player_card[0][1][0]->cilindros}} cc</p>
                                        </div>
                                    </option>
                                    <option value="3">
                                        <div class="w-100 d-flex justify-content-between flex-wrap flex-row">
                                            <p>Potencias:</p>
                                            <p>{{$player_card[0][1][0]->potencia}}cc</p>
                                        </div>
                                    </option>

                                    <option value="3">
                                        <div class="w-100 d-flex justify-content-between flex-wrap flex-row">
                                            <p>revoluciones:</p>
                                            <p>{{$player_card[0][1][0]->revoluciones}}cc</p>
                                        </div>
                                    </option>

                                    <option value="3">
                                        <div class="w-100 d-flex justify-content-between flex-wrap flex-row">
                                            <p>peso:</p>
                                            <p>{{$player_card[0][1][0]->peso}}cc</p>
                                        </div>
                                    </option>


                                </select>
                            </div>
                        </article>


                        
                        <article  draggable="true" class="col-2 border p-2 border-5 rounded-4 shadow-lg h-100" >
                            
                            <p class="d-flex text-dark">Carta de {{$player_card[1][0]}}</p>

                            <div class="w-100 d-flex ">
                                <p>{{$player_card[0][1][1]->carta}}</p>
                            </div>
                            <div class="w-100 d-flex h-50">
                                <img src="{{$player_card[0][1][1]->img_carta}}" alt="" class="img-fluid rounded-4">
                            </div>
                            <div class="w-100 d-flex mt-3">
                                <p>{{$player_card[0][1][1]->modelo}}</p>
                            </div>
                            <div class="w-100 d-flex  bg-black-50 p-2 flex-column ">
                                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="" style="font-size:8pt ">
                                    <option selected>Seleccione la opcion a comparar</option>
                                    <option value="1" class="">
                                    <div class="w-100 d-flex justify-content-between flex-wrap flex-row">
                                        <p>Cilingraje:</p>
                                        <p>{{$player_card[0][1][1]->cilindraje}} cc</p>
                                    </div>
                                    </option>
                                    <option value="2">
                                        <div class="w-100 d-flex justify-content-between flex-wrap flex-row">
                                            <p>cilindros :</p>
                                            <p>{{$player_card[0][1][1]->cilindros}} cc</p>
                                        </div>
                                    </option>
                                    <option value="3">
                                        <div class="w-100 d-flex justify-content-between flex-wrap flex-row">
                                            <p>Potencias:</p>
                                            <p>{{$player_card[0][1][1]->potencia}}cc</p>
                                        </div>
                                    </option>

                                    <option value="3">
                                        <div class="w-100 d-flex justify-content-between flex-wrap flex-row">
                                            <p>revoluciones:</p>
                                            <p>{{$player_card[0][1][1]->revoluciones}}cc</p>
                                        </div>
                                    </option>

                                    <option value="3">
                                        <div class="w-100 d-flex justify-content-between flex-wrap flex-row">
                                            <p>peso:</p>
                                            <p>{{$player_card[0][1][1]->peso}}cc</p>
                                        </div>
                                    </option>


                                </select>
                            </div>
                        </article>
               {{-- @endforeach --}}

               <article  draggable="true" class="col-2 border p-2 border-5 rounded-4 shadow-lg h-100" >
                            
                <p class="d-flex text-dark">Carta de {{$player_card[2][0]}}</p>

                <div class="w-100 d-flex ">
                    <p>{{$player_card[0][1][2]->carta}}</p>
                </div>
                <div class="w-100 d-flex h-50">
                    <img src="{{$player_card[0][1][2]->img_carta}}" alt="" class="img-fluid rounded-4">
                </div>
                <div class="w-100 d-flex mt-3">
                    <p>{{$player_card[0][1][2]->modelo}}</p>
                </div>
                <div class="w-100 d-flex  bg-black-50 p-2 flex-column ">
                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="" style="font-size:8pt ">
                        <option selected>Seleccione la opcion a comparar</option>
                        <option value="1" class="">
                        <div class="w-100 d-flex justify-content-between flex-wrap flex-row">
                            <p>Cilingraje:</p>
                            <p>{{$player_card[0][1][2]->cilindraje}} cc</p>
                        </div>
                        </option>
                        <option value="2">
                            <div class="w-100 d-flex justify-content-between flex-wrap flex-row">
                                <p>cilindros :</p>
                                <p>{{$player_card[0][1][2]->cilindros}} cc</p>
                            </div>
                        </option>
                        <option value="3">
                            <div class="w-100 d-flex justify-content-between flex-wrap flex-row">
                                <p>Potencias:</p>
                                <p>{{$player_card[0][1][2]->potencia}}cc</p>
                            </div>
                        </option>

                        <option value="3">
                            <div class="w-100 d-flex justify-content-between flex-wrap flex-row">
                                <p>revoluciones:</p>
                                <p>{{$player_card[0][1][2]->revoluciones}}cc</p>
                            </div>
                        </option>

                        <option value="3">
                            <div class="w-100 d-flex justify-content-between flex-wrap flex-row">
                                <p>peso:</p>
                                <p>{{$player_card[0][1][2]->peso}}cc</p>
                            </div>
                        </option>


                    </select>
                </div>
            </article>


            <article  draggable="true" class="col-2 border p-2 border-5 rounded-4 shadow-lg h-100" >
                            
                <p class="d-flex text-dark">Carta de {{$player_card[3][0]}}</p>

                <div class="w-100 d-flex ">
                    <p>{{$player_card[0][1][3]->carta}}</p>
                </div>
                <div class="w-100 d-flex h-50">
                    <img src="{{$player_card[0][1][3]->img_carta}}" alt="" class="img-fluid rounded-4">
                </div>
                <div class="w-100 d-flex mt-3">
                    <p>{{$player_card[0][1][3]->modelo}}</p>
                </div>
                <div class="w-100 d-flex  bg-black-50 p-2 flex-column ">
                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="" style="font-size:8pt ">
                        <option selected>Seleccione la opcion a comparar</option>
                        <option value="1" class="">
                        <div class="w-100 d-flex justify-content-between flex-wrap flex-row">
                            <p>Cilingraje:</p>
                            <p>{{$player_card[0][1][3]->cilindraje}} cc</p>
                        </div>
                        </option>
                        <option value="2">
                            <div class="w-100 d-flex justify-content-between flex-wrap flex-row">
                                <p>cilindros :</p>
                                <p>{{$player_card[0][1][3]->cilindros}} cc</p>
                            </div>
                        </option>
                        <option value="3">
                            <div class="w-100 d-flex justify-content-between flex-wrap flex-row">
                                <p>Potencias:</p>
                                <p>{{$player_card[0][1][3]->potencia}}cc</p>
                            </div>
                        </option>

                        <option value="3">
                            <div class="w-100 d-flex justify-content-between flex-wrap flex-row">
                                <p>revoluciones:</p>
                                <p>{{$player_card[0][1][3]->revoluciones}}cc</p>
                            </div>
                        </option>

                        <option value="3">
                            <div class="w-100 d-flex justify-content-between flex-wrap flex-row">
                                <p>peso:</p>
                                <p>{{$player_card[0][1][3]->peso}}cc</p>
                            </div>
                        </option>


                    </select>
                </div>
            </article>
                
                 
             </section>
            
         </section>
     </section>
     
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    
     <script src="{{asset('js/logica.js')}}"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>