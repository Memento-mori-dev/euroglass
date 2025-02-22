function getParameters(search){
  let result = {
      'parameters': [],
      'page' : '1' 
  }

  if (search == '') return result;

  let arrParameters = search.split('&');
  arrParameters.forEach(par => {
      let arrPar = par.split('='),
          key = arrPar[0],
          value = arrPar[1];

      if (key == 'id_page') {
          result.page = value;
      }else{
          result.parameters.push(value);
      }
  });

  return result;
}

export {getParameters};