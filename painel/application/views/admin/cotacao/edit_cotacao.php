<!-- DataTables -->
<link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datatables/dataTables.bootstrap4.css">

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <section class="content">
    <!-- For Messages -->
    <?php $this->load->view('admin/includes/_messages.php') ?>
    <div class="card">
      <div class="card-header">
        <div class="d-inline-block">
          <h3 class="card-title"><i class="fa fa-list"></i>&nbsp; Cotação do Usuário: <?= $cotacao['name'] ?></h3>
        </div>
        <div class="d-inline-block float-right">

        </div>
      </div>
    </div>

    <h3>Endereço Origem</h3>
    <?php $this->load->view('admin/includes/_messages.php') ?>
    <?php echo form_open(base_url('admin/cotacao/edit/'.$cotacao['id']), 'class="form-horizontal"' )?> 

    <div class="form-group">
      <label for="username" class="col-md-2 control-label">Usuário</label>

      <div class="col-md-12">
        <input type="text" name="name" value="<?= $cotacao['name']; ?>" class="form-control" id="name" placeholder="">
      </div>
    </div>
    <div class="form-group">
      <label for="firstname" class="col-md-2 control-label">Endereço de Origem</label>

      <div class="col-md-12">
        <input type="text" name="firstname" value="<?= $cotacao['street1']; ?>" class="form-control" id="street1" placeholder="">
      </div>
    </div>

    <div class="form-group">
      <label for="city" class="col-md-2 control-label">Cidade Origem</label>

      <div class="col-md-12">
        <input type="text" name="city" value="<?= $cotacao['city']; ?>" class="form-control" id="city" placeholder="">
      </div>
    </div>

    <div class="form-group">
      <label for="city" class="col-md-2 control-label">Estado Origem</label>

      <div class="col-md-12">
        <input type="text" name="estado" value="<?= $cotacao['state']; ?>" class="form-control" id="state" placeholder="">
      </div>
    </div>

    <div class="form-group">
      <label for="city" class="col-md-2 control-label">País Origem</label>

      <div class="col-md-12">
        <input type="text" name="country" value="<?= $cotacao['country']; ?>" class="form-control" id="country" placeholder="">
      </div>
    </div>

    <div class="form-group">
      <label for="city" class="col-md-2 control-label">CEP Origem</label>

      <div class="col-md-12">
        <input type="text" name="zip" value="<?= $cotacao['zip']; ?>" class="form-control" id="zip" placeholder="">
      </div>
    </div>

    <h3>Dados do pacote / embalagem enviada</h3>

    <div class="form-group">
      <label for="city" class="col-md-2 control-label">Largura, Altura, Comprimento e Peso</label>
      
      <div class="row col-md-12">
      <div class="col-md-3">
        <input type="text" name="width" value="<?= $cotacao['width']; ?>" class="form-control" id="width" placeholder="">
      </div>
      <div class="col-md-3">
        <input type="text" name="height" value="<?= $cotacao['height']; ?>" class="form-control" id="height" placeholder="">
      </div>
      <div class="col-md-3">
        <input type="text" name="length" value="<?= $cotacao['length']; ?>" class="form-control" id="length" placeholder="">
      </div>
      <div class="col-md-3">
        <input type="text" name="weight" value="<?= $cotacao['weight']; ?>" class="form-control" id="weight" placeholder="">
      </div>
      </div>
    </div>


    <h3>Endereço Destino</h3>

    <div class="form-group">
      <label for="firstname" class="col-md-2 control-label">Endereço de Destino</label>

      <div class="col-md-12">
        <input type="text" name="d_street" value="<?= $cotacao['d_street']; ?>" class="form-control" id="d_street1" placeholder="">
      </div>
    </div>

    <div class="form-group">
      <label for="city" class="col-md-2 control-label">Cidade Destino</label>

      <div class="col-md-12">
        <input type="text" name="d_city" value="<?= $cotacao['d_city']; ?>" class="form-control" id="d_city" placeholder="">
      </div>
    </div>

    <div class="form-group">
      <label for="d_city" class="col-md-2 control-label">Estado Destino</label>

      <div class="col-md-12">
        <input type="text" name="estado" value="<?= $cotacao['d_state']; ?>" class="form-control" id="state" placeholder="">
      </div>
    </div>

    <div class="form-group">
      <label for="d_city" class="col-md-2 control-label">País Destino</label>

      <div class="col-md-12">
        <input type="text" name="country" value="<?= $cotacao['d_country']; ?>" class="form-control" id="country" placeholder="">
      </div>
    </div>

    <div class="form-group">
      <label for="d_city" class="col-md-6 control-label">CEP Destino</label>

      <div class="col-md-12">
        <input type="text" name="d_zip" value="<?= $cotacao['d_zip']; ?>" class="form-control" id="zip" placeholder="">
      </div>
    </div>

    <div class="form-group">
      <label for="d_city" class="col-md-6 control-label">Preço / Seguro / Desconto</label>
      <div class="row col-md-12">
      <div class="col-md-4">
          <input type="text" name="preco" value="<?= $cotacao['preco']; ?>" class="form-control" id="preco" placeholder="Preço">
      </div>
      <div class="col-md-4">
          <input type="text" name="seguro" value="<?= $cotacao['seguro']; ?>" class="form-control" id="seguro" placeholder="Seguro">
      </div>
      <div class="col-md-4">
          <input type="text" name="desconto" value="<?= $cotacao['desconto']; ?>" class="form-control" id="desconto" placeholder="Desconto">
      </div>
      </div>
    </div>

    <div class="form-group">
      <input type="submit" name="submit" value="Atualizar" class="btn btn-primary" />
    </div>


  </section>
</div>
<?php echo form_close(); ?>

<!-- DataTables -->
<script src="<?= base_url() ?>assets/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?= base_url() ?>assets/plugins/datatables/dataTables.bootstrap4.js"></script>

<script>
  //---------------------------------------------------
  var table = $('#na_datatable').DataTable({
    "processing": true,
    "serverSide": false,
    "ajax": "<?= base_url('admin/cotacao/datatable_json') ?>",
    "order": [
      [4, 'desc']
    ],
    "columnDefs": [{
        "targets": 0,
        "name": "id",
        'searchable': true,
        'orderable': true
      },
      {
        "targets": 1,
        "name": "nome",
        'searchable': true,
        'orderable': true
      },
      {
        "targets": 2,
        "name": "email",
        'searchable': true,
        'orderable': true
      },
      {
        "targets": 3,
        "name": "mobile_no",
        'searchable': true,
        'orderable': true
      },
      {
        "targets": 4,
        "name": "admin_id",
        'searchable': true,
        'orderable': true
      },
      {
        "targets": 5,
        "name": "created_at",
        'searchable': false,
        'orderable': false
      },
      {
        "targets": 6,
        "name": "is_active",
        'searchable': true,
        'orderable': true
      },
      {
        "targets": 7,
        "name": "Action",
        'searchable': false,
        'orderable': false,
        'width': '100px'
      }
    ]
  });
</script>


<script type="text/javascript">
  $("body").on("change", ".tgl_checkbox", function() {
    console.log('checked');
    $.post('<?= base_url("admin/users/change_status") ?>', {
        '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>',
        id: $(this).data('id'),
        status: $(this).is(':checked') == true ? 1 : 0
      },
      function(data) {
        $.notify("Status Changed Successfully", "success");
      });
  });
</script>