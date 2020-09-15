@extends('layout.site')
@section('titulo', 'Preço Legal')
@section('conteudo')
    
    

    <!-- Texto -->
        <div class="card border-light">
            <div class="card-body">
                <section id="titulo">
                <h1 class="text-center pt-5">Preços de combustíveis</h1>
                <p class="text-center text-secondary pb-5">Aqui você pode pesquisar os preços do combustível para economizar, ganhar tempo e praticidade</p>
                </section>
            </div>
        </div>

    <!-- Tabela -->
        <div class="table-responsive">
            <table class="table text-center" id="tabela-principal">
                <thead>
                    <tr>
                    <th scope="col">Etanoll</th>
                    <th scope="col">G.Comum</th>
                    <th scope="col">G.Aditivada</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">Ver mais</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>R$3,89</td>
                        <td>R$3,43</td>
                        <td>R$3,73</td>
                        <td>Asa Norte 211/411</td>
                        <td><i class="fas fa-search"></i></td>
                    </tr>
                    <tr>
                        <td>R$3,53</td>
                        <td>R$4,21</td>
                        <td>R$3,08</td>
                        <td>Asa Norte 113/513</td>
                        <td><i class="fas fa-search"></i></td>
                    </tr>
                    <tr>
                        <td>R$2,83</td>
                        <td>R$3,79</td>
                        <td>R$4,01</td>
                        <td>Asa Norte 216 - Eixinho</td>
                        <td><i class="fas fa-search"></i></td>
                    </tr>
                    <tr>
                        <td>R$4,03</td>
                        <td>R$2,23</td>
                        <td>R$3,53</td>
                        <td>Paranoá</td>
                        <td><i class="fas fa-search"></i></td>
                    </tr>
                    <tr>
                        <td>R$5,03</td>
                        <td>R$3,78</td>
                        <td>R$3,93</td>
                        <td>Águas Claras</td>
                        <td><i class="fas fa-search"></i></td>
                    </tr>
                    <tr>
                        <td>R$2,98</td>
                        <td>R$6,21</td>
                        <td>R$3,41</td>
                        <td>Taguatinga</td>
                        <td><i class="fas fa-search"></i></td>
                    </tr>
                    <tr>
                        <td>R$3,70</td>
                        <td>R$2,93</td>
                        <td>R$3,88</td>
                        <td>Asa Sul 203/403</td>
                        <td><i class="fas fa-search"></i></td>
                    </tr>
                </tbody>
            </table>
        </div>
    
@endsection