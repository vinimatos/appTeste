<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">
            <button class="btn btn-primary btn-sm" @click="novo()">Novo</button>
          </div>
          <div style="margin-left: 25%; padding-top: 5%">
            <h3>Lista dos alunos cadastrados</h3>
          </div>
          <div class="card-body">
            <table class="table table-striped table-hover mb-0">
              <thead>
                <tr>
                  <th class="text-center">Nome</th>
                  <th class="text-center">CPF</th>
                  <th class="text-center">Cidade</th>
                  <th></th>
                </tr>
              </thead>
              <tbody v-for="item in alunos" :key="item.id">
                <tr>
                  <td class="text-center">
                    {{ item.nome }}
                  </td>
                  <td class="text-center">
                    {{ item.cpf }}
                  </td>
                  <td class="text-center">
                    {{ item.cidade }}
                  </td>
                  <td>
                    <button class="btn-sm btn-danger">Excluir</button>
                     <button class="btn-sm btn-primary" >Editar</button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  mounted() {
    //console.log("Component mounted.");
  },
  props: {
    alunos: Object,
  },
  beforeMount() {
    this.obterAlunos();
  },
  methods: {
    novo() {
      window.location = "./novo";
    },
    obterAlunos() {
      axios.get("./alunos").then(({ data }) => {
        this.alunos = data;
      });
    },
  },
};
</script>
