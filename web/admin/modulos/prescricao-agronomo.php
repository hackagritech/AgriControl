<?php include 'layout/header.php'; ?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h5 class="m-0 text-dark">Preencha os campos abaixo</h5>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active"><a href="#">Prescrição do Agronomo</a></li>
                    <li class="breadcrumb-item">Início</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<section class="content">

    <div class="row">
        <!-- left column -->
        <div class="col-md-7">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-body">
                    <div class="form-group">
                        <label>Cutivar</label>
                        <input type="text" class="form-control"
                               placeholder="Variedade" name="cutivar">
                    </div>
                    <div class="form-group">
                        <label>Talhão</label>
                        <input type="text" class="form-control"
                               placeholder="Descreva o nome do talhão" name="talhao">
                    </div>
                    <div class="form-group">
                        <label>Defensivos Agricolas</label>
                        <select class="form-control" id="defensivo">
                            <option></option>
                            <option>Fungicida</option>
                            <option>Herbicida</option>
                            <option>Insteticida</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <textarea id="recomendacao" class="form-control"
                        placeholder="Descreva a recomendação de uso do produto utilizado..."></textarea>

                    </div>
                    <div class="form-group">
                        <span>Descreva a dosagem necessária</span>
                        <div class="row">
                            <div class="col">
                                <label>Insumo</label>
                                <input type="text" class="form-control" name="tableInsumo">
                            </div>
                            <div class="col">
                                <label>
                                    Total Solicitado
                                    <span style="font-size: 14px; color:red;"
                                          data-toggle="tooltip"
                                          title="Litros ou Kg">(?) </span>
                                </label>
                                <input type="text" class="form-control" name="tableSolicitado">
                            </div>
                            <div class="col">
                                <label>Dosagem</label>
                                <input type="text" class="form-control" name="tableDosagem">
                            </div>
                            <div class="col">
                                <label>Vol. Por Tanque</label>
                                <input type="text" class="form-control" name="tableVolTanque">
                            </div>
                            <div class="col" style="max-width: 10px; position: relative;
                                            top: 32px; left: -13px;">
                                        <span id="addTable" class="btn btn-sm btn-info">
                                            <span class="fa fa-plus"></span>
                                        </span>
                            </div>

                        </div>
                        <div class="row">
                            <table id="implements-insumo" class="table">
                                <!--                                        <tr>-->
                                <!--                                            <th>Insumo</th>-->
                                <!--                                            <th>Total Solicitado</th>-->
                                <!--                                            <th>Dosagem</th>-->
                                <!--                                            <th>Vol. Por Tanque</th>-->
                                <!--                                        </tr>-->

                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-md-5">
            <div class="card card-primary">
                <div class="card-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <h5 class="mt-2">Velocidade de Aplicação </h5>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" name="velocidadeAplicacao">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h5 class="mt-2">Distancia entre bicos
                                    <span style="font-size:0.8em;">( Cm )</span></h5>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Ex: 21" name="distanciBicos">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h5 class="mt-2">Pressão dos bicos </h5>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" name="pressaoBicos">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h5 class="mt-2">horario de aplicação </h5>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" name="horarioAplicacao">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h5 class="mt-2">Vazão dos Bicos </h5>
                            </div>
                            <div class="col">
                                <input type="number" min="1" max="4" class="form-control" placeholder="Ex: 1 a 4 "
                                       name="vazaoBicos">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h5 class="mt-2">PH da Água</h5>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" name="phAgua">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h5 class="mt-2">Bicos <span style="font-size:0.9em;"> - modelo de ponta </span>
                                </h5>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" name="bicosModelosPonta">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h5 class="mt-2">Altura Barra</h5>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" name="alturaBarra">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card-footer">
                    <button style="float: right;" class="btn btn-primary" onclick="enviarFb()">
                        Salvar Prescrição
                    </button>
                </div>
            </div>
        </div>
</section>
<?php include 'layout/footer.php'; ?>
<script>
    var jsonTable = [];
    $('#addTable').on('click', function () {
        let trAtual = Math.floor(Math.random() * 65536);
        let tableInsumo = $('input[name="tableInsumo"]');
        let tableSolicitado = $('input[name="tableSolicitado"]');
        let tableDosagem = $('input[name="tableDosagem"]');
        let tableVolTanque = $('input[name="tableVolTanque"]');
        if (tableInsumo.val() === '') {
            return;
        }
        $('#implements-insumo').append(`
            <tr id="${trAtual}">
                <td>${tableInsumo.val()}</td>
                <td>${tableSolicitado.val()}</td>
                <td>${tableDosagem.val()}</td>
                <td>${tableDosagem.val()}</td>
                <td><span class="fa fa-trash" style="color:red; cursor: pointer;" onclick="rmThis(${trAtual})"></span> </td>
            <tr>
        `)

        jsonTable.push(
            {
                insumo: tableInsumo.val(),
                solicitado: tableSolicitado.val(),
                dosagem: tableDosagem.val(),
                volTanque: tableVolTanque.val()
            }
        )
        tableInsumo.val('')
        tableSolicitado.val('')
        tableDosagem.val('')
        tableVolTanque.val('')
    });

    function rmThis(trAtual) {
        $(`#${trAtual}`).remove()
    }

    function enviarFb() {
        db.collection("prescricao").add({
            cutivar: `${$('input[name="cutivar"]').val()}`,
            talhao: $('input[name="talhao"]').val(),
            defensivo: $('#defensivo').val(),
            velocidadeAplicacao: $('input[name="velocidadeAplicacao"]').val(),
            horarioAplicacao: $('input[name="horarioAplicacao"]').val(),
            vazaoBicos: $('input[name="vazaoBicos"]').val(),
            phAgua: $('input[name="phAgua"]').val(),
            bicosModelosPonta: $('input[name="bicosModelosPonta"]').val(),
            alturaBarra: $('input[name="alturaBarra"]').val(),
            passoApasso: jsonTable,
            status: 'pendente',
            recomendacao: $('#recomendacao').val(),

        })
            .then(function (docRef) {
                console.log("Document written with ID: ", docRef.id);
                location.reload();
            })
            .catch(function (error) {
                console.error("Error adding document: ", error);
            });

    }
</script>
