content = open('home-b.html', encoding='utf-8', errors='replace').read()
lines = content.splitlines(keepends=True)

# Remove lines 1074 to 1872 (the entire injected header block)
new_lines = lines[:1073] + lines[1872:]

result = ''.join(new_lines)

# Fix cost-calculator links (relative -> absolute)
result = result.replace('/tools/cost-calculator', 'https://cr8vstacks.com/toolkits/website-cost-calculator/')

open('home-b.html', 'w', encoding='utf-8').write(result)
print(f'Done. New line count: {len(result.splitlines())}')
