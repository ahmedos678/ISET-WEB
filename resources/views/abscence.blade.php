<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/abscence.css">
</head>
<body>
    @extends('templateSideBar')
    
@section('content')
<main>
     <h1>
        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M840-120v-640H120v320H40v-320q0-33 23.5-56.5T120-840h720q33 0 56.5 23.5T920-760v560q0 33-23.5 56.5T840-120ZM360-400q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47Zm0-80q33 0 56.5-23.5T440-560q0-33-23.5-56.5T360-640q-33 0-56.5 23.5T280-560q0 33 23.5 56.5T360-480ZM40-80v-112q0-34 17.5-62.5T104-298q62-31 126-46.5T360-360q66 0 130 15.5T616-298q29 15 46.5 43.5T680-192v112H40Zm80-80h480v-32q0-11-5.5-20T580-226q-54-27-109-40.5T360-280q-56 0-111 13.5T140-226q-9 5-14.5 14t-5.5 20v32Zm240-400Zm0 400Z"/></svg>              
        <span>ABSCENCE</span>
    </h1>
    <div class="container">
      <h3>Mes abscences:</h3>
      <p>Statistiques Détaillées par période</p>  
      
      <div class="semestre">
        <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#5f6368"><path d="m388-212-56-56 92-92-92-92 56-56 92 92 92-92 56 56-92 92 92 92-56 56-92-92-92 92ZM200-80q-33 0-56.5-23.5T120-160v-560q0-33 23.5-56.5T200-800h40v-80h80v80h320v-80h80v80h40q33 0 56.5 23.5T840-720v560q0 33-23.5 56.5T760-80H200Zm0-80h560v-400H200v400Zm0-480h560v-80H200v80Zm0 0v-80 80Z"/></svg>        
        <span>SEMESTRE 1</span>
      </div>  

      <div class="main-semestre">
        <div class="header-semestre">
            <h6>
                <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#5f6368"><path d="m388-212-56-56 92-92-92-92 56-56 92 92 92-92 56 56-92 92 92 92-56 56-92-92-92 92ZM200-80q-33 0-56.5-23.5T120-160v-560q0-33 23.5-56.5T200-800h40v-80h80v80h320v-80h80v80h40q33 0 56.5 23.5T840-720v560q0 33-23.5 56.5T760-80H200Zm0-80h560v-400H200v400Zm0-480h560v-80H200v80Zm0 0v-80 80Z"/></svg>        
                <span>Semestre 1 entre 23-09-2024 et 11-01-2025</span>
            </h6>
            <p>Le taux d'absentéisme sera calculé en fonction de nombre des absences par rapport au temps de cours/tp prévu sur une période déterminée / Semestre 1 </p>
        </div>
        <div class="body-semestre">
            <h4>MATIERE 1</h4>
            <div class="containert">
                <ul class="responsive-table">
                  <li class="table-header">
                    <div class="col col-1">NBR H C</div>
                    <div class="col col-2">NBR H TP</div>
                    <div class="col col-3">NBR SEMAINES</div>
                    <div class="col col-4">CHARGES HORAIRE</div>
                  </li>
                  <li class="table-row">
                    <div class="col col-1" data-label="Job Id">3</div>
                    <div class="col col-2" data-label="Customer Name">0</div>
                    <div class="col col-3" data-label="Amount">14</div>
                    <div class="col col-4" data-label="Payment Status">42</div>
                  </li>
                  <li class="table-row" id="merge">
                    <div class="col col-1" data-label="Job Id">0</div>
                    <div class="col col-2" data-label="Customer Name">0</div>
                    <div class="col col-3" data-label="Amount">0</div>
                    <div class="col col-4" data-label="Payment Status">0%</div>
                  </li>
                  
                </ul>
              </div>
        </div>

        <div class="body-semestre">
            <h4>MATIERE 2</h4>
            <div class="containert">
                <ul class="responsive-table">
                  <li class="table-header">
                    <div class="col col-1">NBR H C</div>
                    <div class="col col-2">NBR H TP</div>
                    <div class="col col-3">NBR SEMAINES</div>
                    <div class="col col-4">CHARGES HORAIRE</div>
                  </li>
                  <li class="table-row">
                    <div class="col col-1" data-label="Job Id">3</div>
                    <div class="col col-2" data-label="Customer Name">0</div>
                    <div class="col col-3" data-label="Amount">14</div>
                    <div class="col col-4" data-label="Payment Status">42</div>
                  </li>
                  <li class="table-row" id="merge">
                    <div class="col col-1" data-label="Job Id">0</div>
                    <div class="col col-2" data-label="Customer Name">0</div>
                    <div class="col col-3" data-label="Amount">0</div>
                    <div class="col col-4" data-label="Payment Status">0%</div>
                  </li>
                  
                </ul>
              </div>
        </div>

        <div class="body-semestre">
            <h4>MATIERE 3</h4>
            <div class="containert">
                <ul class="responsive-table">
                  <li class="table-header">
                    <div class="col col-1">NBR H C</div>
                    <div class="col col-2">NBR H TP</div>
                    <div class="col col-3">NBR SEMAINES</div>
                    <div class="col col-4">CHARGES HORAIRE</div>
                  </li>
                  <li class="table-row">
                    <div class="col col-1" data-label="Job Id">3</div>
                    <div class="col col-2" data-label="Customer Name">0</div>
                    <div class="col col-3" data-label="Amount">14</div>
                    <div class="col col-4" data-label="Payment Status">42</div>
                  </li>
                  <li class="table-row" id="merge">
                    <div class="col col-1" data-label="Job Id">0</div>
                    <div class="col col-2" data-label="Customer Name">0</div>
                    <div class="col col-3" data-label="Amount">0</div>
                    <div class="col col-4" data-label="Payment Status">0%</div>
                  </li>
                  
                </ul>
              </div>
        </div>


        <div class="body-semestre">
            <h4>MATIERE 4</h4>
            <div class="containert">
                <ul class="responsive-table">
                  <li class="table-header">
                    <div class="col col-1">NBR H C</div>
                    <div class="col col-2">NBR H TP</div>
                    <div class="col col-3">NBR SEMAINES</div>
                    <div class="col col-4">CHARGES HORAIRE</div>
                  </li>
                  <li class="table-row">
                    <div class="col col-1" data-label="Job Id">3</div>
                    <div class="col col-2" data-label="Customer Name">0</div>
                    <div class="col col-3" data-label="Amount">14</div>
                    <div class="col col-4" data-label="Payment Status">42</div>
                  </li>
                  <li class="table-row" id="merge">
                    <div class="col col-1" data-label="Job Id">0</div>
                    <div class="col col-2" data-label="Customer Name">0</div>
                    <div class="col col-3" data-label="Amount">0</div>
                    <div class="col col-4" data-label="Payment Status">0%</div>
                  </li>
                  
                </ul>
              </div>
        </div>


        <div class="body-semestre">
            <h4>MATIERE 5</h4>
            <div class="containert">
                <ul class="responsive-table">
                  <li class="table-header">
                    <div class="col col-1">NBR H C</div>
                    <div class="col col-2">NBR H TP</div>
                    <div class="col col-3">NBR SEMAINES</div>
                    <div class="col col-4">CHARGES HORAIRE</div>
                  </li>
                  <li class="table-row">
                    <div class="col col-1" data-label="Job Id">3</div>
                    <div class="col col-2" data-label="Customer Name">0</div>
                    <div class="col col-3" data-label="Amount">14</div>
                    <div class="col col-4" data-label="Payment Status">42</div>
                  </li>
                  <li class="table-row" id="merge">
                    <div class="col col-1" data-label="Job Id">0</div>
                    <div class="col col-2" data-label="Customer Name">0</div>
                    <div class="col col-3" data-label="Amount">0</div>
                    <div class="col col-4" data-label="Payment Status">0%</div>
                  </li>
                  
                </ul>
              </div>
        </div>
      </div>

    </div>
    
    
</main>
@endsection

</body>
</html>