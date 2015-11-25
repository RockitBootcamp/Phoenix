import bug from 'debug'
const debug = bug('rockit-express:routes')

import requireDir from 'require-dir'
const routes = requireDir('./api', { recurse: true });

import express from 'express'
const router = express.Router()

for (let route in routes) {
  if (route !== 'index') {
    debug(`Creating route: /${route}`)
    router.use(`/${route}`, routes[route])
  }
}

export default router
