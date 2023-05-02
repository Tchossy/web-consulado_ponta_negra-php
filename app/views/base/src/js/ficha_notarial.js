const baseURL = '/web-consulado_ponta_negra-php/app/views/base/src/controllers/'
const controllerURL = '/web-consulado_ponta_negra-php/app/controllers/'

const origin_url = window.location.origin

const cardForm = document.getElementById('card-user-form')
const getPdf = document.getElementById('get-pdf-btn')

getPdf.addEventListener('click', async event => {
  event.preventDefault()

  alert('Por favor aguarde, o seu documento está sendo gerado')

  const dataForm = new FormData(cardForm)
  dataForm.append('add', 1)

  await fetch(origin_url + controllerURL + 'ficha_notarial.php', {
    method: 'POST',
    body: dataForm
  })
    .then(function (response) {
      // Se a resposta da requisição for bem sucedida, converte a resposta em um blob e cria um link de download para o PDF
      return response.blob()
    })
    .then(function (blob) {
      var link = document.createElement('a')
      link.href = window.URL.createObjectURL(blob)
      link.download = 'ficha_notarial.pdf'
      link.click()
    })
})
