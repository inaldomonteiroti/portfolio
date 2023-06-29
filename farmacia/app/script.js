const aplicacao = new Vue({
  el: '#app',
  data: {
    nomeEmpresa: "FarmaVida",
    colecaoVacinas: [
      { id: 1, nome: 'Dengue', descricao: "Previne a infecção causada pelos quatro sorotipos de dengue e tem por objetivo reduzir os casos graves da doença"},
      { id: 2, nome: 'Influenza', descricao: "Essa vacina é uma das mais vendidas em farmácias. Trata-se de vacina inativada."},
      { id: 3, nome: 'Meningococica B', descricao: "A vacina previne meningites e infecções generalizadas (doenças meningocócicas) causadas pela bactéria meningococo do tipo B."},
    ],
    colecaoDepoimentos: [
      { id: 1, cliente: "Joana", opiniao: "Excelente farmácia. A melhor que conheci." },
      { id: 2, cliente: "Pedro", opiniao: "Todo ano eu venho tomar a vacina de gripe." },
      { id: 3, cliente: "Ana", opiniao: "Profissionais excelentes." },
    ],
  }
});
