import os
import re

portfolio_file = r"c:\Users\HP\Downloads\Mega Menu\portfolio\index.html"

with open(portfolio_file, 'r', encoding='utf-8') as f:
    content = f.read()

# Replace all ../portfolio/ pointing to case study html files with ../Case Studies/
content = re.sub(r'href=["\']\.\./portfolio/([^"\']+\.html)["\']', r'href="../Case Studies/\1"', content)

with open(portfolio_file, 'w', encoding='utf-8') as f:
    f.write(content)

print("Portfolio links fixed successfully!")
