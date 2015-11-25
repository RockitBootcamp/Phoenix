import config from '../../config.json'

export const json = config

export default (req, res, next) => {
  req.config = config
  next()
}
