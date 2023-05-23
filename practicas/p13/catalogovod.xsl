<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
    <xsl:output method="html" encoding="UTF-8" doctype-public="-//W3C//DTD XHTML 1.0 Strict//EN"
        doctype-system="http://www.w3.org/TR/xhtml1/DTD/strict.dtd"/>
    
    <xsl:template match="/">
        <html lang="en">
            <head>
                <title>Netfli</title>
                <meta charset="utf-8"/>
                <meta name="viewport" content="width=device-width, initial-scale=1"/>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
                    rel="stylesheet"/>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"/>
            </head>
            <body>
                <div class="p-3 bg-primary text-white text-center">
                    <p style="text-align: center; font-size: 60px; background-color: red;">
                        <img src="logo.png" alt="logo" width="100px" height="100px" class="rounded"/> 
                        <strong>Netflix</strong>
                    </p>
                </div>
                
                <div class="container mt-3">
                    <h2>Peliculas</h2>
                    <table class="table table-bordered text-center table-hover">
                        <thead>
                            <tr class="table-success">
                                <th colspan="4">Peliculas</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="table-warning fw-bold">
                                <td>Titulo</td>
                                <td>Género</td>
                                <td>Duración</td>
                            </tr>
                            <tr class="table-warning">
                                <xsl:for-each select="//contenido/peliculas/genero[1]/titulo[1]">
                                    <td> <xsl:value-of select="./text()"/> </td>
                                    <td><xsl:value-of select="../@nombre"/> </td>
                                    <td><xsl:value-of select="./@duracion"/> </td>
                                </xsl:for-each>
                            </tr>
                            <tr class="table-warning">
                                <xsl:for-each select="//contenido/peliculas/genero[1]/titulo[2]">
                                    <td> <xsl:value-of select="./text()"/> </td>
                                    <td><xsl:value-of select="../@nombre"/> </td>
                                    <td><xsl:value-of select="./@duracion"/> </td>
                                </xsl:for-each>
                            </tr>
                            <tr class="table-warning">
                                <xsl:for-each select="//contenido/peliculas/genero[2]/titulo[1]">
                                    <td> <xsl:value-of select="./text()"/> </td>
                                    <td><xsl:value-of select="../@nombre"/> </td>
                                    <td><xsl:value-of select="./@duracion"/> </td>
                                </xsl:for-each>
                            </tr>
                            <tr class="table-warning">
                                <xsl:for-each select="//contenido/peliculas/genero[2]/titulo[2]">
                                    <td> <xsl:value-of select="./text()"/> </td>
                                    <td><xsl:value-of select="../@nombre"/> </td>
                                    <td><xsl:value-of select="./@duracion"/> </td>
                                </xsl:for-each>
                                
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <div class="container mt-3">
                    <h2>Series</h2>
                    <table class="table table-bordered text-center table-hover">
                        <thead>
                            <tr class="table-primary">
                                <th colspan="5">Series</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="table-info fw-bold">
                                <td>Titulo</td>
                                <td>Género</td>
                                <td>Capitulos</td>
                                <td>Temporadas</td>
                            </tr>
                            <tr class="table-info">
                                <xsl:for-each select="//contenido/series/genero[1]/titulo[1]">
                                    <td> <xsl:value-of select="./text()"/> </td>
                                    <td><xsl:value-of select="../@nombre"/> </td>
                                    <td><xsl:value-of select="./@duracion"/> </td>
                                    <td>-</td>
                                </xsl:for-each>
                            </tr>
                            <tr class="table-info">
                                <xsl:for-each select="//contenido/series/genero[1]/titulo[2]">
                                    <td> <xsl:value-of select="./text()"/> </td>
                                    <td><xsl:value-of select="../@nombre"/> </td>
                                    <td><xsl:value-of select="./@duracion"/> </td>
                                    <td>-</td>
                                </xsl:for-each>
                            </tr>
                            <tr class="table-info">
                                <xsl:for-each select="//contenido/series/genero[1]/titulo[3]">
                                    <td> <xsl:value-of select="./text()"/> </td>
                                    <td><xsl:value-of select="../@nombre"/> </td>
                                    <td><xsl:value-of select="./@duracion"/> </td>
                                    <td>-</td>
                                </xsl:for-each>
                            </tr>
                            <tr class="table-info">
                                <xsl:for-each select="//contenido/series/genero[2]/titulo[1]">
                                    <td> <xsl:value-of select="./text()"/> </td>
                                    <td><xsl:value-of select="../@nombre"/> </td>
                                    <td>-</td>
                                    <td><xsl:value-of select="./@duracion"/> </td>
                                </xsl:for-each>
                            </tr>
                            <tr class="table-info">
                                <xsl:for-each select="//contenido/series/genero[2]/titulo[2]">
                                    <td> <xsl:value-of select="./text()"/> </td>
                                    <td><xsl:value-of select="../@nombre"/> </td>
                                    <td>-</td>
                                    <td><xsl:value-of select="./@duracion"/> </td>
                                </xsl:for-each>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>
