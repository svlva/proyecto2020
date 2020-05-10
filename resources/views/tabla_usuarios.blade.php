@extends('layout')

@section('Header')
@parent
@section('title', 'Lista de Usuarios')

@section('contenido')

<div class="breadcrumbs">
  <div class="breadcrumbs-inner">
    <div class="row m-0">
      <div class="col-sm-4">
        <div class="page-header float-left">
          <div class="page-title">
            <h1>Vecinos</h1>
          </div>
        </div>
      </div>
      <div class="col-sm-8">
        <div class="page-header float-right">
          <div class="page-title">
            <ol class="breadcrumb text-right">
              <li><a href="#">Vecinos</a></li>
              <li><a href="#">Table</a></li>
              <li class="active">Basic table</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="content">
  <div class="animated fadeIn">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          <strong class="card-title">Lista de vecinos registrados</strong>
        </div>
        <div class="table-stats order-table ov-h">
          <table class="table ">
            <thead>
              <tr>
                <th class="serial">Nombre Completo</th>
                <th>CI</th>
                <th>Fecha de Nacimiento</th>
                <th>Fecha de Registro</th>
                <th>Género</th>
                <th>Dirección</th>
                <th>Número telefónico</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="serial">Nombre Completo</td>
                <td> 12345678 </td>
                <td> <span class="name">01/01/1980</span> </td>
                <td> <span class="product">05/05/2020</span> </td>
                <td><span>Femenino</span></td>
                <td><span>Calle ABCDE Esquina FGHI #1234</span></td>
                <td><span>77654321</span></td>
              </tr>
              <tr>
                <td class="serial">Nombre Completo</td>
                <td> 12345678 </td>
                <td> <span class="name">01/01/1980</span> </td>
                <td> <span class="product">05/05/2020</span> </td>
                <td><span>Masculino</span></td>
                <td><span>Calle ABCDE Esquina FGHI #1234</span></td>
                <td><span>77654321</span></td>
              </tr>
              <tr>
                <td class="serial">Nombre Completo</td>
                <td> 12345678 </td>
                <td> <span class="name">01/01/1980</span> </td>
                <td> <span class="product">05/05/2020</span> </td>
                <td><span>Femenino</span></td>
                <td><span>Calle ABCDE Esquina FGHI #1234</span></td>
                <td><span>77654321</span></td>
              </tr>
              <tr>
                <td class="serial">Nombre Completo</td>
                <td> 12345678 </td>
                <td> <span class="name">01/01/1980</span> </td>
                <td> <span class="product">05/05/2020</span> </td>
                <td><span>Masculino</span></td>
                <td><span>Calle ABCDE Esquina FGHI #1234</span></td>
                <td><span>77654321</span></td>
              </tr>
              <tr>
                <td class="serial">Nombre Completo</td>
                <td> 12345678 </td>
                <td> <span class="name">01/01/1980</span> </td>
                <td> <span class="product">05/05/2020</span> </td>
                <td><span>Femenino</span></td>
                <td><span>Calle ABCDE Esquina FGHI #1234</span></td>
                <td><span>77654321</span></td>
              </tr>
              <tr>
                <td class="serial">Nombre Completo</td>
                <td> 12345678 </td>
                <td> <span class="name">01/01/1980</span> </td>
                <td> <span class="product">05/05/2020</span> </td>
                <td><span>Masculino</span></td>
                <td><span>Calle ABCDE Esquina FGHI #1234</span></td>
                <td><span>77654321</span></td>
              </tr>
              <tr>
                <td class="serial">Nombre Completo</td>
                <td> 12345678 </td>
                <td> <span class="name">01/01/1980</span> </td>
                <td> <span class="product">05/05/2020</span> </td>
                <td><span>Femenino</span></td>
                <td><span>Calle ABCDE Esquina FGHI #1234</span></td>
                <td><span>77654321</span></td>
              </tr>
              <tr>
                <td class="serial">Nombre Completo</td>
                <td> 12345678 </td>
                <td> <span class="name">01/01/1980</span> </td>
                <td> <span class="product">05/05/2020</span> </td>
                <td><span>Masculino</span></td>
                <td><span>Calle ABCDE Esquina FGHI #1234</span></td>
                <td><span>77654321</span></td>
              </tr>
              <tr>
                <td class="serial">Nombre Completo</td>
                <td> 12345678 </td>
                <td> <span class="name">01/01/1980</span> </td>
                <td> <span class="product">05/05/2020</span> </td>
                <td><span>Femenino</span></td>
                <td><span>Calle ABCDE Esquina FGHI #1234</span></td>
                <td><span>77654321</span></td>
              </tr>
              <tr>
                <td class="serial">Nombre Completo</td>
                <td> 12345678 </td>
                <td> <span class="name">01/01/1980</span> </td>
                <td> <span class="product">05/05/2020</span> </td>
                <td><span>Masculino</span></td>
                <td><span>Calle ABCDE Esquina FGHI #1234</span></td>
                <td><span>77654321</span></td>
              </tr>
              <tr>
                <td class="serial">Nombre Completo</td>
                <td> 12345678 </td>
                <td> <span class="name">01/01/1980</span> </td>
                <td> <span class="product">05/05/2020</span> </td>
                <td><span>Femenino</span></td>
                <td><span>Calle ABCDE Esquina FGHI #1234</span></td>
                <td><span>77654321</span></td>
              </tr>
              <tr>
                <td class="serial">Nombre Completo</td>
                <td> 12345678 </td>
                <td> <span class="name">01/01/1980</span> </td>
                <td> <span class="product">05/05/2020</span> </td>
                <td><span>Masculino</span></td>
                <td><span>Calle ABCDE Esquina FGHI #1234</span></td>
                <td><span>77654321</span></td>
              </tr>
              <tr>
                <td class="serial">Nombre Completo</td>
                <td> 12345678 </td>
                <td> <span class="name">01/01/1980</span> </td>
                <td> <span class="product">05/05/2020</span> </td>
                <td><span>Femenino</span></td>
                <td><span>Calle ABCDE Esquina FGHI #1234</span></td>
                <td><span>77654321</span></td>
              </tr>
              <tr>
                <td class="serial">Nombre Completo</td>
                <td> 12345678 </td>
                <td> <span class="name">01/01/1980</span> </td>
                <td> <span class="product">05/05/2020</span> </td>
                <td><span>Masculino</span></td>
                <td><span>Calle ABCDE Esquina FGHI #1234</span></td>
                <td><span>77654321</span></td>
              </tr>
              <tr>
                <td class="serial">Nombre Completo</td>
                <td> 12345678 </td>
                <td> <span class="name">01/01/1980</span> </td>
                <td> <span class="product">05/05/2020</span> </td>
                <td><span>Femenino</span></td>
                <td><span>Calle ABCDE Esquina FGHI #1234</span></td>
                <td><span>77654321</span></td>
              </tr>
              <tr>
                <td class="serial">Nombre Completo</td>
                <td> 12345678 </td>
                <td> <span class="name">01/01/1980</span> </td>
                <td> <span class="product">05/05/2020</span> </td>
                <td><span>Masculino</span></td>
                <td><span>Calle ABCDE Esquina FGHI #1234</span></td>
                <td><span>77654321</span></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>

@endsection

@endsection
