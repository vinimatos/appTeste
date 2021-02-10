<template>
  <div>
    <div class="modal-body">
        <div class="form-row">
          <div class="form-group col-md-8">
            <input type="hidden" id="id" >
            <label for="inputEmail4">Nome</label>
            <input type="text" class="form-control" id="nome" />
          </div>
          <div class="form-group col-md-4">
            <label for="inputEmail4">CPF</label>
            <input type="text" class="form-control"  id="cpf" />
          </div>
        </div>
          <div class="form-group">
            <label for="inputAddress">Endereco</label>
            <input class="form-control" id="endereco" />
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputCity">Cidade</label>
              <input type="text" class="form-control"  id="cidade" />
            </div>
          </div>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-primary" @click="atualizar()">Salvar</button>
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </div>
  </div>
</template>

<script>
export default {
  mounted() {},
  data: () => {
    return {
      id: "",
      nome: "",
      cpf: "",
      endereco: "",
      cidade: "",
    };
  },
  methods: {
     atualizar() {
      axios
        .post("./aluno/update", {
          id: $('#id').val(),
          nome: $('#nome').val(),
          cpf: $('#cpf').val(),
          endereco: $('#endereco').val(),
          cidade: $('#cidade').val(),
        })
        .then((response) => {
          $("#success").html(response.data.message);
          if (response.status == 200) {
            $('#myModal').modal('hide');
            location.reload();
          }
        });
    },
    voltar() {
      window.location = "./home";
    },
  },
};
</script>
