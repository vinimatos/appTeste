<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header"></div>

          <div class="card-body">
            <form @submit.prevent="salvar">
              <div class="form-row">
                <div class="form-group col-md-8">
                  <label for="inputEmail4">Nome</label>
                  <input type="text" class="form-control" v-model="nome" id="nome" />
                </div>
                <div class="form-group col-md-4">
                  <label for="inputEmail4">CPF</label>
                  <input type="text" class="form-control" maxlength="14"  v-mask="'###.###.###-##'" v-model="cpf" id="cpf"/>
                </div>
              </div>
              <div class="form-group">
                <label for="inputAddress">Endereco</label>
                <input class="form-control" v-model="endereco" id="Endereco" />
              </div>

              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputCity">Cidade</label>
                  <input type="text" class="form-control" v-model="cidade" id="cidade" />
                </div>
              </div>
              <div class="pull-right">
                <button class="btn btn-default" @click="voltar()">Voltar</button>
                <button type="submit" class="btn btn-primary">Salvar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>

export default {
  mounted() {
    console.log("Component mounted.");
  },
   
  data: () => {
    return {
      nome: "",
      cpf: "",
      endereco: "",
      cidade: "",
    };
  },
  
  methods: {
    salvar() {
      axios
        .post("./aluno/save", {
          nome: this.nome,
          cpf: this.cpf,
          endereco: this.endereco,
          cidade: this.cidade,
        })
        .then((response) => {
          $("#success").html(response.data.message);
          if (response.status == 200) {
            window.location = "./home";
          }
        });
    },
    voltar() {
      window.location = "./home";
    },
  },
};
</script>
