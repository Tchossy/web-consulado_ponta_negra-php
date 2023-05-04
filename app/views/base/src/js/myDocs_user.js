const baseURL = '/web-consulado_ponta_negra-php/app/views/base/src/controllers/'
const controllerURL = '/web-consulado_ponta_negra-php/app/controllers/'

const origin_url = window.location.origin

const tbody = document.getElementById('tbody')

const cardForm = document.getElementById('schedulingForm')
const msgAlerta = document.getElementById('msgAlertaErroCad')

const btnExit = document.getElementById('btn_exit')

const listUsers = async real_email_user => {
  const dataUsers = await fetch(
    origin_url +
      baseURL +
      'myDocsUserControllers.php?realEmailUser=' +
      real_email_user
  )

  const response = await dataUsers.text()

  tbody.innerHTML = response
}

listUsers()
