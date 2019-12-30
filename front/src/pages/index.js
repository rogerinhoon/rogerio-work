import React from "react"

import Layout from "../components/layout"
import SEO from "../components/seo"

const IndexPage = () => (
  <Layout>
    <SEO title="Home" />
    <h1>Home</h1>
    <ul>
      <li>
        <a href="/about">About</a>
      </li>
    </ul>
  </Layout>
)

export default IndexPage
