import re

files_to_fix = ['home-b.html', 'home2.html', 'homepage_hero_section.html']

for fname in files_to_fix:
    with open(fname, encoding='utf-8', errors='replace') as f:
        content = f.read()
    
    original = content
    
    # 1) sw-testimonial-quote: 0.97rem -> 0.87rem
    content = re.sub(
        r'(\.sw-testimonial-quote\s*\{[^}]*?font-size:\s*)0\.97rem',
        r'\g<1>0.87rem',
        content, flags=re.DOTALL
    )
    
    # 2) sw-matrix-h2: clamp(1.2rem, -> clamp(1.1rem,
    content = re.sub(
        r'(\.sw-matrix-h2\s*\{[^}]*?font-size:\s*clamp\()1\.2rem',
        r'\g<1>1.1rem',
        content, flags=re.DOTALL
    )
    
    # 3) sw-matrix-stat-floating: top: 1.25rem -> top: 4.25rem
    content = re.sub(
        r'(\.sw-matrix-stat-floating\s*\{[^}]*?top:\s*)1\.25rem',
        r'\g<1>4.25rem',
        content, flags=re.DOTALL
    )
    
    if content != original:
        with open(fname, 'w', encoding='utf-8') as f:
            f.write(content)
        print(f'Updated: {fname}')
    else:
        print(f'No changes: {fname}')

print('Done.')
