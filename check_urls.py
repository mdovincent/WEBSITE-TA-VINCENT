import urllib.request
urls=[
 'https://images.unsplash.com/photo-1512058564366-c9e9c2039f6f?auto=format&fit=crop&w=220&q=80',
 'https://images.unsplash.com/photo-1599490659213-e2b9527bd087?auto=format&fit=crop&w=220&q=80',
 'https://images.unsplash.com/photo-1587049352846-4a222e784d38?auto=format&fit=crop&w=200&q=80',
 'https://images.unsplash.com/photo-1542838132-92c53300491e?auto=format&fit=crop&w=200&q=80',
 'https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?auto=format&fit=crop&w=220&q=80',
 'https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?auto=format&fit=crop&w=200&q=80',
 'https://images.unsplash.com/photo-1504674900247-0877df9cc836?auto=format&fit=crop&w=200&q=80',
 'https://images.unsplash.com/photo-1509440159596-0249088772ff?auto=format&fit=crop&w=220&q=80',
 'https://images.unsplash.com/photo-1517686469429-8bdb88b9f907?auto=format&fit=crop&w=200&q=80'
]
for url in urls:
    try:
        req=urllib.request.Request(url, method='HEAD')
        r=urllib.request.urlopen(req, timeout=10)
        print(url, r.status, r.getheader('Content-Type'))
        r.close()
    except Exception as e:
        print('ERROR', url, e)