@include('layout.topo')
@yield('conteudo')
@include('layout.footer')
<style>
    .cor-icone {
        color:white;
    }
    .vertical-align {
        vertical-align: middle!important;
    }
</style>
<script type="text/javascript">
    $(document).ready( function () {
        //alert('ok');
        $('#tabela-principal').DataTable();

        function envia(){
            //if(document.getElementById("id_checkbox").checked == true) {
                //document.getElementById("promocao").disabled = false;
                alert('ok');
            //}
        }

        //document.getElementById("promocao").setAttribute("class", "hidden");
        //$('#promocao').setAttribute("class", "form-group row hidden");
        document.getElementById("promocao").disabled = true;
        
    });
</script>
