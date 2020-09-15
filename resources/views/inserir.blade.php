@extends('layout.site')
@section('titulo', 'Preço Legal')
@section('conteudo')
    <div class="card border-light">
        <div class="card-body">
            <section id="titulo">
                <h1 class="text-center pt-4">Inserir valores</h1>
            </section>
        </div>
    </div>
    <div class="container">
        <form class="m-5" >
            <div class="form-group row mt-5 mb-5">
                <label class="col-lg-3 control-label text-lg-right pt-2" for="regiao_adm">Etanol</label>
                <div class="col-lg-6 input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">R$</div>
                        </div>
                        <input type="number" class="form-control" id="inlineFormInputGroup" placeholder="0,00">
                </div>
            </div>
            
            <div class="form-group row mt-5 mb-5" style="background-color: red;">
                <label class="col-lg-3 control-label text-lg-right pt-2" for="regiao_adm" style="background-color: green;">Gasolina Comum</label>
                <div class="col-lg-6 input-group mb-2" style="background-color: blue;">
                    <div class="input-group-prepend">
                        <div class="input-group-text">R$</div>
                        </div>
                        <input type="number" class="form-control" id="inlineFormInputGroup" placeholder="0,00">
                </div>
            </div>

            <div class="form-group row mt-5 mb-5">
                <label class="col-lg-3 control-label text-lg-right pt-2" for="regiao_adm">Gasolina Aditivada</label>
                <div class="col-lg-6 input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">R$</div>
                        </div>
                        <input type="number" class="form-control" id="inlineFormInputGroup" placeholder="0,00">
                </div>
            </div>


            <div class="form-group row mt-5 mb-5">
                <label class="col-lg-3 control-label text-lg-right pt-2" for="regiao_adm">Região</label>
                <div class="col-lg-6">
                    <select  name="regiao_adm" class="form-control" id="id_regiao_adm">
                        <option value="">Selecione uma região</option>
                        <option value="ARNIQUEIRAS">Arniqueiras</option>
                        <option value="ARAPOANGA">Arapoanga</option>
                        <option value="ÁGUAS CLARAS">Águas Claras</option>
                        <option value="BRAZLÂNDIA">Brazlândia</option>
                        <option value="CANDANGOLÂNDIA">Candangolândia</option>
                        <option value="CEILÂNDIA">Ceilândia</option>
                        <option value="CRUZEIRO">Cruzeiro</option>
                        <option value="ESTRUTURAL">Estrutural</option>
                        <option value="FERCAL">Fercal</option>
                        <option value="GUARÁ">Guará</option>
                        <option value="GAMA">Gama</option>
                        <option value="ITAPOÃ">Itapoã</option>
                        <option value="JARDIM BOTÂNICO">Jardim Botânico</option>
                        <option value="LAGO NORTE">Lago Norte</option>
                        <option value="LAGO SUL">Lago Sul</option>
                        <option value="NÚCLEO BANDEIRANTE">Núcleo Bandeirante</option>
                        <option value="PARANOÁ">Paranoá</option>
                        <option value="PLANALTINA">Planaltina</option>
                        <option value="PLANO PILOTO">Plano Piloto</option>
                        <option value="PARK WAY">Park Way</option>
                        <option value="POR DO SOL SOL NASCENTE">Por do Sol/Sol Nascente</option>
                        <option value="RECANTO DAS EMAS">Recanto das Emas</option>
                        <option value="RIACHO FUNDO I">Riacho Fundo I</option>
                        <option value="RIACHO FUNDO II">Riacho Fundo II</option>
                        <option value="SIA">SIA</option>
                        <option value="SOBRADINHO I">Sobradinho I</option>
                        <option value="SOBRADINHO II">Sobradinho II</option>
                        <option value="SAMAMBAIA">Samambaia</option>
                        <option value="SANTA MARIA">Santa Maria</option>
                        <option value="SÃO SEBASTIÃO">São Sebastião</option>
                        <option value="SUDOESTE OCTOGONAL">Sudoeste/Octogonal</option>
                        <option value="TAGUATINGA">Taguatinga</option>
                        <option value="VARJÃO">Varjão</option>
                        <option value="VICENTE PIRES">Vicente Pires</option>
                    </select>
                </div>
            </div>
            
            <div class="custom-control custom-checkbox" id="id_checkbox" onclick="return envia()">
                <input type="checkbox" class="custom-control-input" id="customCheck1" >
                <label class="custom-control-label" for="customCheck1" >Possui promoção?</label>
            </div>
                <br>
            <div class="form-group row">
                <label class="col-lg-3 control-label text-lg-right pt-2" for="exampleFormControlTextarea1">Especifique:</label>
                <div class="col-lg-6">
                    <textarea class="form-control" id="promocao" rows="3"></textarea>
                </div>
            </div>


            <div class="form-group row">
                <label class="col-lg-3 control-label text-lg-right pt-2" for="nome">OBSERVAÇÃO</label>
                <div class="col-lg-6">
                    <textarea name="observacao" class="form-control" rows="6" cols="30" placeholder="LIVRE" value="observacao" id="id_observacao" tabindex="21"></textarea>
                </div>
            </div>


                <br>
                

            <!-- <button type="submit" class="btn btn-primary">Enviar</button> -->
            <div class="form-group row">
                <div class="col-sm-9 control-label text-lg-center pt-2">
                    <button class="btn btn-primary" tabindex="22">Enviar</button>
                    <button type="reset" class="btn btn-default" tabindex="23">Limpar</button>
                </div>
            </div>
        </form>
    </div>
    <br>
@endsection