<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xsl:version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
	<xsl:template match="/">
		<html>
			<body>
				<h2>
					Student Collection
				</h2>
				<table border="1">
					<thead>
						<tr bgcolor="#D8B6A4">
							<th style="text-align:left">
								Firstname
							</th>
							<th style="text-align:left">
								Lastname
							</th>
                            <th style="text-align:left">
								ID
							</th>
                            <th style="text-align:left">
								Faculty
							</th>
                            <th style="text-align:left">
								Dept
							</th>
                            <th style="text-align:left">
								Province
							</th>
                            <th style="text-align:left">
								Email
							</th>
                            <th style="text-align:left">
								Phone
							</th>
						</tr>
					</thead>
					<xsl:for-each select="student/no">
						<tbody>
							<tr>
								<td>
									<xsl:value-of select="fname" />
								</td>
								<td>
									<xsl:value-of select="lname" />
								</td>
                                <td>
									<xsl:value-of select="id" />
								</td>
                                <td>
									<xsl:value-of select="faculty" />
								</td>
                                <td>
									<xsl:value-of select="dept" />
								</td>
                                <td>
									<xsl:value-of select="province" />
								</td>
                                <td>
									<xsl:value-of select="email" />
								</td>
                                <td>
									<xsl:value-of select="phone" />
								</td>
							</tr>
						</tbody>
					</xsl:for-each>
				</table>
			</body>
		</html>
	</xsl:template>
</xsl:stylesheet>
