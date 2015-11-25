import camelProps from '../camel-props'
import snakeProps from '../snake-props'
import {json as config} from '../config'

export default object => {
  var useCamel = false

  if (!config.autocase) return object

  for (let key in object) {
    if ((/_/).test(key)) {
      useCamel = true
      break;
    }
  }

  if (useCamel) {
    return camelProps(object)
  } else {
    return snakeProps(object)
  }
}
