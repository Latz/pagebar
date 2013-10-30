import MySQLdb

db = MySQLdb.connect(user='root', passwd='x', db='wpn')

c = db.cursor()

query = 'delete from wp_options where option_name = "postbar"'
c.execute(query)

query = 'delete from wp_options where option_name = "commentbar"'
c.execute(query)

query = 'delete from wp_options where option_name = "multibar"'
c.execute(query)

db.commit()

query = 'select * from wp_options where option_name = "postbar"'


for i in xrange(c.rowcount):
    print c.fetchone()


