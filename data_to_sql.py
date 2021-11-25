import pymysql
import csv
stock_data = []
with open('data.csv', newline='',encoding='utf-8') as csvfile:
    rows = csv.reader(csvfile)
    for row in rows:
        stock_data.append(row)
print(row)
db = pymysql.connect(host='localhost',user = "root",database='stock_database')
cursor = db.cursor()
# 使用预处理语句创建表

# 关闭数据库连接
db.close()