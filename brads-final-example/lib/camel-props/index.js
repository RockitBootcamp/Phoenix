import _ from 'lodash'
import changeCase from 'change-case'

const transform = set => [changeCase.camel(set[0]), set[1]]

export default _.flow(_.pairs, _.partialRight(_.map, transform), _.zipObject)
