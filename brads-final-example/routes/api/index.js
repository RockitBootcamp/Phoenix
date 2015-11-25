import bug from 'debug'
const debug = bug('rockit-express:api')

import path from 'path'
import assign from 'lodash/object/assign'
import dotty from 'dotty'
import express from 'express'

import db from '../../lib/db'
import changeCase from '../../lib/change-case'

const router = express.Router()

router.get('/:entity', (req, res) => {
  debug(`GET ${req.path}`)
  const entity = dotty.get(req, 'params.entity')
  const sql = `SELECT * FROM ${entity}`

  db.select(sql, (error, rows, fields) => {
    if (error) {
      return res.status(500).send({ error, sql })
    }

    res.json(rows.map(changeCase))
  })
})

router.get('/:entity/:id', (req, res) => {
  debug(`GET ${req.path}`)
  const entity = dotty.get(req, 'params.entity')
  const id = dotty.get(req, 'params.id')
  const sql = `SELECT * FROM ${entity} WHERE ${entity}_id = :id`

  db.select(sql, { id }, (error, rows, fields) => {
    if (error) {
      return res.status(500).send({ error, sql })
    }

    res.json(rows.map(changeCase))
  })
})

router.get('/:entity/:id/:subEntity', (req, res) => {
  debug(`GET ${req.path}`)
  const entity = dotty.get(req, 'params.entity')
  const subEntity = dotty.get(req, 'params.subEntity')
  const id = dotty.get(req, 'params.id')
  const sql = `SELECT * FROM ${subEntity} WHERE ${entity}_id = :id`

  db.select(sql, { id }, (error, rows, fields) => {
    if (error) {
      return res.status(500).send({ error, sql })
    }

    res.json(rows.map(changeCase))
  })
})

router.post('/:entity', (req, res) => {
  debug(`POST ${req.path}`, req.body)
  const entity = dotty.get(req, 'params.entity')
  const payload = dotty.get(req, 'body')

  db.insert(entity, changeCase(payload), (error, id) => {
    if (error) {
      return res.status(500).send({ error })
    }

    const uri = `${req.originalUrl}/${id}`

    res.location(uri).status(201).send(uri)
  })
})

router.put('/:entity/:id', (req, res) => {
  debug(`PUT ${req.path}`, req.body)
  const entity = dotty.get(req, 'params.entity')
  const id = dotty.get(req, 'params.id')
  const payload = dotty.get(req, 'body')

  db.update(entity, changeCase(payload), { [`${entity}_id`]: id }, error => {
    if (error) {
      return res.status(500).send({ error })
    }

    res.location(req.originalUrl).sendStatus(200)
  })
})

router.delete('/:entity/:id', (req, res) => {
  debug(`DELETE ${req.path}`)
  const entity = dotty.get(req, 'params.entity')
  const id = dotty.get(req, 'params.id')

  debug('mysql-chassis does not support delete')
  res.sendStatus(501)
})

export default router
