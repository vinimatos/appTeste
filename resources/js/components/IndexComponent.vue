<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-primary btn-sm" @click="novo()">
                            Novo
                        </button>
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
                            <tbody v-for="item in ListaAlunos" :key="item.id">
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
                                        <button
                                            type="button"
                                            class="btn-sm btn btn-danger"
                                            @click="excluir(item.id)"
                                        >
                                            Excluir
                                        </button>
                                        <button
                                            class="btn-sm btn-primary"
                                            @click="
                                                setVal(
                                                    item.id,
                                                    item.nome,
                                                    item.cpf,
                                                    item.cidade,
                                                    item.endereco
                                                )
                                            "
                                            data-toggle="modal"
                                            data-target="#myModal"
                                        >
                                            Editar
                                        </button>
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
    mounted() {},
    data() {
        return {
           ListaAlunos : this.alunos
        }
    },
    props: ["alunos"],
    beforeMount() {
        this.obterAlunos();
    },
    methods: {
        novo() {
            window.location = "./novo";
        },
        obterAlunos() {
            axios.get("./alunos").then(({ data }) => {
                this.ListaAlunos = data;
            });
        },
        setVal(val, val1, val2, val3, val4) {
            $("#id").attr("value", val);
            $("#nome").attr("value", val1);
            $("#cpf").attr("value", val2);
            $("#cidade").attr("value", val3);
            $("#endereco").attr("value", val4);
        },
        excluir(id) {
            if (confirm("Deseja realmente excluir?")) {
                axios.get("./aluno/excluir/" + id).then(({ response }) => {
                    location.reload();
                });
            }
        }
    }
};
</script>
