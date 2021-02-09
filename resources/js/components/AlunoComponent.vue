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
                  <input type="text" class="form-control" id="email" />
                </div>
                <div class="form-group col-md-4">
                  <label for="inputEmail4">CPF</label>
                  <input type="text" class="form-control" id="cpf" />
                </div>
              </div>
              <div class="form-group">
                <label for="inputAddress">Endereco</label>
                <input type="text" class="form-control" id="Endereco" />
              </div>

              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputCity">City</label>
                  <input type="text" class="form-control" id="inputCity" />
                </div>
              </div>
              <button type="submit" class="btn btn-primary">
                Salvar
              </button>
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
  methods: {
    salvar() {
        axios.post('./aluno/save',)
                        .then((response)=>{

                        $('#success').html(response.data.message)

                        })
    },
  },
};
</script>
